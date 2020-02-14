<?php

return [
	
	/*
	|--------------------------------------------------------------------------
	| Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| The following language lines contain the default error messages used by
	| the validator class. Some of these rules have multiple versions such
	| as the size rules. Feel free to tweak each of these messages here.
	|
	*/
	
	'accepted'              => ' :attribute trebuie sa fie acceptat.',
	'active_url'            => ' :attribute nu e un URL valid.',
	'after'                 => ' :attribute trebuie sa fie o data dupa :date.',
	'after_or_equal'        => ' :attribute trebuie sa fie o data dupa sau aceeasi cu :date.',
	'alpha'                 => ' :attribute poate sa contina doar litere.',
	'alpha_dash'            => ' :attribute poate sa contina doar litere, numere, slash si underscore.',
	'alpha_num'             => ' :attribute poate sa contina doar litere si numere.',
	'array'                 => ' :attribute trebuie sa fie un sir.',
	'before'                => ' :attribute trebuie sa fie o data inainte de :date.',
	'before_or_equal'       => ' :attribute trebuie sa fie o data inainte de sau aceeasi cu :date.',
	'between'               => [
		'numeric' => ' :attribute trebuie sa fie intre :min si :max.',
		'file'    => ' :attribute trebuie sa fie intre :min si :max kilobyteuri.',
		'string'  => ' :attribute trebuie sa fie intre :min si :max caractere.',
		'array'   => ' :attribute trebuie sa aiba intre :min si :max elemente.',
	],
	'boolean'               => ' :attribute trebuie sa fie adevarat sau fals.',
	'confirmed'             => ' :attribute confirmare nu corespunde.',
	'date'                  => ' :attribute nu e o data valida.',
	'date_equals'           => ' :attribute trebuie sa fie o data corespuzatoare cu :date.',
	'date_format'           => ' :attribute nu corespunde cu formatul :format.',
	'different'             => ' :attribute si :other trebuie sa fie diferite.',
	'digits'                => ' :attribute trebuie sa aiba :digits cifre.',
	'digits_between'        => ' :attribute trebuie sa fie intre :min si :max cifre.',
	'dimensions'            => ' :attribute are dimenziunile de poza invalide.',
	'distinct'              => ' :attribute are o valoare care se repeta.',
	'email'                 => ' :attribute trebuie sa fie un email valid.',
	'exists'                => ' :attribute selectat e invalid.',
	'file'                  => ' :attribute trebuie sa fie un fisier.',
	'filled'                => ' :attribute trebuie sa aiba o valoare.',
	'image'                 => ' :attribute trebuie sa fie o poza.',
	'in'                    => ' :attribute selectat e invalid.',
	'in_array'              => ' :attribute nu exista in :other.',
	'integer'               => ' :attribute trebuie sa fie un numar intreg.',
	'ip'                    => ' :attribute trebuie sa fie o adresa IP valida.',
	'ipv4'                  => ' :attribute trebuie sa fie o adresa IPv4 valida.',
	'ipv6'                  => ' :attribute trebuie sa fie o adresa IPv6 valida.',
	'json'                  => ' :attribute trebuie sa fie un string JSON valid.',
	'max'                   => [
		'numeric' => ' :attribute nu poate sa fie mai mare decat :max.',
		'file'    => ' :attribute nu poate sa fie mai mare decat :max kilobyteuri.',
		'string'  => ' :attribute nu poate sa fie mai mare decat :max caractere.',
		'array'   => ' :attribute nu poate sa aiba mai multe decat :max elemente.',
	],
	'mimes'                 => ' :attribute trebuie sa fie un fisier de tip: :values.',
	'mimetypes'             => ' :attribute trebuie sa fie un fisier de tip: :values.',
	'min'                   => [
		'numeric' => ' :attribute trebuie sa fie cel putin :min.',
		'file'    => ' :attribute trebuie sa fie cel putin :min kilobyteuri.',
		'string'  => ' :attribute trebuie sa fie cel putin :min caractere.',
		'array'   => ' :attribute trebuie sa aiba cel putin :min elemente.',
	],
	'not_in'                => ' :attribute selectat e invalid.',
	'not_regex'             => ' :attribute are format invalid.',
	'numeric'               => ' :attribute trebuie sa fie un numar.',
	'present'               => ' :attribute trebuie sa fie prezent.',
	'regex'                 => ' :attribute are format invalid.',
	'required'              => ' :attribute este necesar.',
	'required_if'           => ' :attribute este necesar cand :other este :value.',
	'required_unless'       => ' :attribute este necesar doar daca :other nu este :values.',
	'required_with'         => ' :attribute este necesar cand :values e prezent.',
	'required_with_all'     => ' :attribute este necesar cand :values e prezent.',
	'required_without'      => ' :attribute este necesar cand :values nu e prezent.',
	'required_without_all'  => ' :attribute este necesar cand nici unul dintre :values nu e prezent.',
	'same'                  => ' :attribute si :other trebuie sa corespunda.',
	'size'                  => [
		'numeric' => ' :attribute trebuie sa fie :size.',
		'file'    => ' :attribute trebuie sa fie :size kilobyteuri.',
		'string'  => ' :attribute trebuie sa fie :size caractere.',
		'array'   => ' :attribute trebuie sa aiba :size elemente.',
	],
	'starts_with'           => ' :attribute trebuie sa se inceapa cu unul dintre urmatoarele: :values',
	'string'                => ' :attribute trebuie sa fie un string.',
	'timezone'              => ' :attribute trebuie sa fie o zona valida.',
	'unique'                => ' :attribute este deja utilizat.',
	'uploaded'              => ' :attribute nu a fost incarcat.',
	'url'                   => ' :attribute are format invalid.',
	
	
	// Packages Rules
	'recaptcha'    => ' :attribute nu e corect.',
	'phone'        => ' :attribute contine un numar invalid.',
	'dumbpwd'      => 'Aceasta parola este foarte comuna. Alege o alta parola!',
	'phone_number' => 'Numarul de telefon e invalid.',
	
	
	// Custom Rules
	'required_package_id'                     => 'Trebuie sa alegi o optiune de anunturi premium pentru a continua.',
	'required_payment_method_id'              => 'Trebuie sa alegi o metoda de plata pentru a continua.',
	'blacklist_email_rule'                    => 'Aceasta adresa de email e pe lista neagra.',
	'blacklist_domain_rule'                   => 'Domeniul adresei tale de email e pe lista neagra.',
	'blacklist_ip_rule'                       => ' :attribute trebuie sa fie un IP valid.',
	'blacklist_word_rule'                     => ' :attribute contine cuvinte sau fraze interzise.',
	'blacklist_title_rule'                    => ' :attribute contine cuvinte sau fraze interzise.',
	'between_rule'                            => ' :attribute trebuie sa fie :min si :max caractere.',
	'username_is_valid_rule'                  => ' :attribute trebuie sa contina numai litere si numere.',
	'username_is_allowed_rule'                => ' :attribute nu este permis.',
	'locale_of_language_rule'                 => ' :attribute este invalid.',
	'locale_of_country_rule'                  => ' :attribute este invalid.',
	'currencies_codes_are_valid_rule'         => ' :attribute este invalid.',
	'custom_field_unique_rule'                => ' :field_1 are deja :field_2 setat.',
	'custom_field_unique_rule_field'          => ' :field_1 este deja atribuit aici: :field_2.',
	'custom_field_unique_children_rule'       => 'Un descendent :field_1 al lui :field_1 are deja :field_2 setat.',
	'custom_field_unique_children_rule_field' => ' :field_1 e deja atribuit lui :field_2 a lui :field_2.',
	'custom_field_unique_parent_rule'         => 'Parintele lui :field_1 de la :field_1 are deja :field_2 setat.',
	'custom_field_unique_parent_rule_field'   => ' :field_1 este deja atribuit parintelui :field_2 al lui :field_2.',
	
	
	/*
	|--------------------------------------------------------------------------
	| Custom Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| Here you may specify custom validation messages for attributes using the
	| convention "attribute.rule" to name the lines. This makes it quick to
	| specify a specific custom language line for a given attribute rule.
	|
	*/
	
	'custom' => [
		
		'database_connection'      => [
			'required' => 'Nu se poate conecta la serverul MySQL',
		],
		'database_not_empty'       => [
			'required' => 'Baza de date nu este goala',
		],
		'promo_code_not_valid'     => [
			'required' => 'Codul promotional este invalid',
		],
		'smtp_valid'               => [
			'required' => 'Nu se poate conecta la serverul SMTP',
		],
		'yaml_parse_error'         => [
			'required' => 'Nu se poate analiza yaml. Verifica sintaxa',
		],
		'file_not_found'           => [
			'required' => 'Fisierul nu a fost gasit.',
		],
		'not_zip_archive'          => [
			'required' => 'Fisierul nu e un pachet zip.',
		],
		'zip_archive_unvalid'      => [
			'required' => 'Pachetul nu poate fi citit.',
		],
		'custom_criteria_empty'    => [
			'required' => 'Criteriile personalizate nu pot fi goale',
		],
		'php_bin_path_invalid'     => [
			'required' => 'Executabil PHP invalid. Verifica din nou.',
		],
		'can_not_empty_database'   => [
			'required' => 'Nu era posibil stergerea unor tabele. Curata baza de date manual, si incearca din nou.',
		],
		'recaptcha_invalid'        => [
			'required' => 'Verificare reCAPTCHA invalida.',
		],
		'payment_method_not_valid' => [
			'required' => 'A aparut o eroare la setarea metodei de plata. Incearca din nou.',
		],
	
	],
	
	/*
	|--------------------------------------------------------------------------
	| Custom Validation Attributes
	|--------------------------------------------------------------------------
	|
	| The following language lines are used to swap attribute place-holders
	| with something more reader friendly such as E-Mail Address instead
	| of "email". This simply helps us make messages a little cleaner.
	|
	*/
	
	'attributes' => [
		
		'gender'                => 'sex',
		'gender_id'             => 'sex',
		'name'                  => 'nume',
		'first_name'            => 'nume',
		'last_name'             => 'prenume',
		'user_type'             => 'tip utilizator',
		'user_type_id'          => 'tip utilizator',
		'country'               => 'tara',
		'country_code'          => 'tara',
		'phone'                 => 'telefon',
		'address'               => 'adresa',
		'mobile'                => 'mobil',
		'sex'                   => 'sex',
		'year'                  => 'an',
		'month'                 => 'luna',
		'day'                   => 'zi',
		'hour'                  => 'ora',
		'minute'                => 'minut',
		'second'                => 'secunda',
		'username'              => 'nume de utilizator',
		'email'                 => 'adresa email',
		'password'              => 'parola',
		'password_confirmation' => 'confirmarea parolei',
		'g-recaptcha-response'  => 'captcha',
		'term'                  => 'termeni',
		'category'              => 'categorie',
		'category_id'           => 'categorie',
		'post_type'             => 'tip post',
		'post_type_id'          => 'tip post',
		'title'                 => 'titlu',
		'body'                  => 'corp',
		'description'           => 'descriere',
		'excerpt'               => 'extras',
		'date'                  => 'data',
		'time'                  => 'timp',
		'available'             => 'disponibil',
		'size'                  => 'marime',
		'price'                 => 'pret',
		'salary'                => 'salariu',
		'contact_name'          => 'nume',
		'location'              => 'locatie',
		'admin_code'            => 'locatie',
		'city'                  => 'oras',
		'city_id'               => 'oras',
		'package'               => 'pachet',
		'package_id'            => 'pachet',
		'payment_method'        => 'metoda de plata',
		'payment_method_id'     => 'metoda de plata',
		'sender_name'           => 'nume',
		'subject'               => 'subject',
		'message'               => 'mesaj',
		'report_type'           => 'tip raport',
		'report_type_id'        => 'tip raport',
		'file'                  => 'fisier',
		'filename'              => 'nume fisier',
		'picture'               => 'poza',
		'resume'                => 'cv',
		'login'                 => 'logare',
		'code'                  => 'cod',
		'token'                 => 'token',
		'comment'               => 'comentariu',
		'rating'                => 'scor',
		'locale'                => 'scena',
		'currencies'            => 'monede',
		'tags'					=> 'Taguri',
		
	],

];
