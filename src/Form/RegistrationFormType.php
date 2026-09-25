<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Blank;
use Symfony\Component\Validator\Constraints\Callback;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', EmailType::class, [
                'constraints' => [
                    new NotBlank(['message' => 'Entrer votre adresse email']),
                    new Email([
                        'mode' => Email::VALIDATION_MODE_HTML5,
                        'message' => "Cette adresse email n'est pas valide",
                    ]),
                    new Length(['max' => 180]),
                ],
            ])
            ->add('name', TextType::class, ['label' => "Prénom", 'constraints' => self::nameConstraints()])
            ->add('surname', TextType::class, ['label' => "Nom", 'constraints' => self::nameConstraints()])
            ->add('plainPassword', RepeatedType::class, [
                'type' => PasswordType::class,
                'invalid_message' => 'Les deux mots de passe doivent correspondre.',
                'required' => true,
                'first_options' => ['label' => 'Mot de passe : '],
                'second_options' => ['label' => 'Tapez le mot de passe à nouveau : '],

                //PasswordType::class, [
                // instead of being set onto the object directly,
                // this is read and encoded in the controller
                'mapped' => false,
                'attr' => ['autocomplete' => 'new-password'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Entrer un mot de passe',
                    ]),
                    new Length([
                        'min' => 6,
                        'minMessage' => "Votre mot de passe doit être d'au moins {{ limit }} caractères",
                        // max length allowed by Symfony for security reasons
                        'max' => 4096,
                    ]),
                ],
            ])
            ->add('agreeTerms', CheckboxType::class, [
                'label' => 'Vous acceptez que votre mail soit utilisé uniquement par la rédaction de Fluvial pour vous informez ponctuellement',
                'mapped' => false,
                'constraints' => [
                    new IsTrue([
                        'message' => 'Vous devez valider nos CGU',
                    ]),
                ],
            ])
            // Champ piège invisible : un humain le laisse vide, les robots le remplissent
            ->add('website', TextType::class, [
                'mapped' => false,
                'required' => false,
                'label' => false,
                'attr' => ['autocomplete' => 'off', 'tabindex' => '-1'],
                'row_attr' => [
                    'style' => 'position:absolute;left:-10000px;width:1px;height:1px;overflow:hidden',
                    'aria-hidden' => 'true',
                ],
                'constraints' => [new Blank(['message' => 'Inscription refusée'])],
            ])
        ;
    }

    /**
     * Prénom / nom : lettres, espaces, tirets, apostrophes et points uniquement.
     * Bloque les noms contenant des liens ou des messages (« *654 fluvialnet.com »)
     * et les noms à casse aléatoire générés par des robots (« WqPNFHyMQ »).
     */
    private static function nameConstraints(): array
    {
        return [
            new NotBlank(['message' => 'Ce champ est obligatoire']),
            new Length(['max' => 50]),
            new Regex([
                'pattern' => "/^\p{L}[\p{L}\p{M} .'’-]*$/u",
                'message' => 'Ce champ ne peut contenir que des lettres, espaces, tirets et apostrophes',
            ]),
            new Regex([
                'pattern' => '/\.\p{L}{2,}/u',
                'match' => false,
                'message' => 'Les adresses web ne sont pas autorisées dans ce champ',
            ]),
            new Callback(static function (?string $value, ExecutionContextInterface $context): void {
                foreach (preg_split("/[\s'’.-]+/u", (string) $value) as $word) {
                    if ('' === $word || $word === mb_strtoupper($word)) {
                        continue;
                    }
                    if (preg_match_all('/\p{Ll}\p{Lu}/u', $word) >= 2 || preg_match_all('/\p{Lu}/u', mb_substr($word, 1)) >= 3) {
                        $context->buildViolation('Ce nom ne semble pas valide')->addViolation();

                        return;
                    }
                }
            }),
        ];
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
