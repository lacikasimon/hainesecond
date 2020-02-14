<?php

return [
	
	/*
	|--------------------------------------------------------------------------
	| Emails Language Lines
	|--------------------------------------------------------------------------
	|
	| The following language lines are used by the Mail notifications.
	|
	*/
	
	// built-in template
	'Whoops!' => 'Ups!',
	'Hello!' => 'Salut!',
	'Regards' => 'Cu stima',
	"If you’re having trouble clicking the \":actionText\" button, copy and paste the URL below\ninto your web browser: [:actionURL](:actionURL)" => "Daca ai probleme cu butonul \":actionText\", copiaza URL-ul de mai jos si inserteaza-l in browserul tau: [:actionURL](:actionURL)",
	'All rights reserved.' => 'Toate drepturile rezervate.',
	
	
	// custom mail_footer (unused)
	'mail_footer_content'            => 'Vinde si cumpara langa tine. Simplu, rapid si eficient.',
	
	
	// email_verification
	'email_verification_title'       => 'Verifica adresa de email.',
	'email_verification_action'      => 'Verifica adresa de email',
	'email_verification_content_1'   => 'Salut :userName !',
	'email_verification_content_2'   => 'Apasa butonul de mai jos pentru a verifica adresa de email.',
	'email_verification_content_3'   => 'Ai primit acest email pentru ca ai creat recent un cont :appName sau ai adaugat un email nou. Daca nu ai fost tu, ignora acest email.',
	
	
	// post_activated (new)
	'post_activated_title'             => 'Anuntul tau a fost activat',
	'post_activated_content_1'         => 'Salut,',
	'post_activated_content_2'         => 'Anuntul tau <a href=":postUrl">:title</a> a fost activat.',
	'post_activated_content_3'         => 'Anuntul va examinat in curand de un administrator pentru publicare.',
	'post_activated_content_4'         => 'Ai primit acest email pentru ca ai creat recent un anunt pe :appName. Daca nu ai fost tu, ignora acest email.',
	
	
	// post_reviewed (new)
	'post_reviewed_title'              => 'Anuntul tau e online',
	'post_reviewed_content_1'          => 'Salut,',
	'post_reviewed_content_2'          => 'Anuntul tau <a href=":postUrl">:title</a> este acum online.',
	'post_reviewed_content_3'          => 'Ai primit acest email pentru ca ai creat recent un anunt pe :appName. Daca nu ai fost tu, ignora acest email.',
	
	
	// post_republished (new)
	'post_republished_title'              => 'Anuntul tau a fost republicat',
	'post_republished_content_1'          => 'Salut,',
	'post_republished_content_2'          => 'Anuntul tau <a href=":postUrl">:title</a> a fost republicat cu succes.',
	'post_republished_content_3'          => 'Ai primit acest email pentru ca ai creat recent un anunt pe :appName. Daca nu ai fost tu, ignora acest email.',
	
	
	// post_deleted
	'post_deleted_title'               => 'Anuntul tau a fost sters',
	'post_deleted_content_1'           => 'Salut,',
	'post_deleted_content_2'           => 'Anuntul tau ":title" a fost sters de pe <a href=":appUrl">:appName</a> la :now.',
	'post_deleted_content_3'           => 'Iti multumim pentru incredere si ne vedem in curand!',
	'post_deleted_content_4'           => 'PS: Acesta este un email automat, nu raspunde.',
	
	
	// post_seller_contacted
	'post_seller_contacted_title'      => 'Anuntul tau ":title" pe :appName',
	'post_seller_contacted_content_1'  => '<strong>Informatii de contact:</strong>
<br>Nume: :name
<br>Adresa email: :email
<br>Numar de telefon: :phone',
	'post_seller_contacted_content_2'  => 'Acest email ti-a fost trimis in despre anuntul ":title" pe care ai postat pe :appName : <a href=":postUrl">:postUrl</a>',
	'post_seller_contacted_content_3'  => 'NOTA: Persoana care te-a contactat nu stie adresa te de email!',
	'post_seller_contacted_content_4'  => 'Verifica intotdeauna detaliile persoanei de contact (nume, adresa, ...), ca sa fii sigur ca ai un contact in cazul unei dispute! In general, alege predarea personala a articolelor.',
	'post_seller_contacted_content_5'  => 'Ai grija cu ofertele tentante! Ai grija cu cererile din strainatate cand ai doar un email ca si contact. Transferurile propuse prin Western Union sau MoneyGram pot fi false!',
	'post_seller_contacted_content_6'  => 'Iti multumim pentru incredere si ne vedem in curand!',
	'post_seller_contacted_content_7'  => 'PS: Acesta este un email automat, nu raspunde.',
	
	
	// user_deleted
	'user_deleted_title'             => 'Contul tau a fost sters de pe :appName',
	'user_deleted_content_1'         => 'Salut,',
	'user_deleted_content_2'         => 'Contul tau a fost sters de pe <a href=":appUrl">:appName</a> la :now.',
	'user_deleted_content_3'         => 'Iti multumim pentru incredere si ne vedem in curand!',
	'user_deleted_content_4'         => 'PS: Acesta este un email automat, nu raspunde.',
	
	
	// user_activated (new)
	'user_activated_title'           => 'Bine ai venit la :appName !',
	'user_activated_content_1'       => 'Bine ai venit la :appName :userName !',
	'user_activated_content_2'       => 'Contul tau a fost activat.',
	'user_activated_content_3'       => '<strong>Nota : echipa :appName recomanda:</strong>
<br><br>1 - Ai grija cu vanzatorii care refuza sa-ti arate bunul oferit,
<br>2 - Nu trimite bani niciodata cu Western Union sau alte mandate internationale.
<br><br>Daca ai indoieli in legatura cu seriozitatea unui vanzator, contacteaza-ne imediat. Astfel, putem lua masuri necesare si prevenim ca cineva mai putin informat sa devina o victima.',
	'user_activated_content_4'       => 'Ai primit acest email pentru ca ai creat recent un cont pe :appName. Daca nu ai fost tu, ignora acest email.',
	
	
	// reset_password
	'reset_password_title'           => 'Reseteaza parola ta',
	'reset_password_action'          => 'Reseteaza parola',
	'reset_password_content_1'       => 'Ti-ai uitat parola?',
	'reset_password_content_2'       => 'Hai sa cream unul nou.',
	'reset_password_content_3'       => 'Daca nu ai cerut resetare de parola, nu trebuie sa faci nimic.',
	
	
	// contact_form
	'contact_form_title'             => 'Mesaj nou de la :appName',
	
	
	// post_report_sent
	'post_report_sent_title'           => 'Raport nou de abuz',
	'Post URL'                         => 'URL post',
	
	
	// post_archived
	'post_archived_title'              => 'Anuntul tau a fost arhivat',
	'post_archived_content_1'          => 'Salut,',
	'post_archived_content_2'          => 'Anuntul tau ":title" a fost arhivat pe :appName la :now.',
	'post_archived_content_3'          => 'Poti sa-l repostezi, apasand aici : <a href=":repostUrl">:repostUrl</a>',
	'post_archived_content_4'          => 'Daca nu faci nimic, anuntul va fi sters definitiv pe :dateDel.',
	'post_archived_content_5'          => 'Iti multumim pentru incredere si ne vedem in curand!',
	'post_archived_content_6'          => 'PS: Acesta este un email automat, nu raspunde.',
	
	
	// post_will_be_deleted
	'post_will_be_deleted_title'       => 'Anuntul tau va fi sters in :days zile',
	'post_will_be_deleted_content_1'   => 'Salut,',
	'post_will_be_deleted_content_2'   => 'Anuntul tau ":title" va fi sters in :days zile pe :appName.',
	'post_will_be_deleted_content_3'   => 'Poti sa-l repostezi, apasand aici : <a href=":repostUrl">:repostUrl</a>',
	'post_will_be_deleted_content_4'   => 'Daca nu faci nimic, anuntul va fi sters definitiv pe :dateDel.',
	'post_will_be_deleted_content_5'   => 'Iti multumim pentru incredere si ne vedem in curand!',
	'post_will_be_deleted_content_6'   => 'PS: Acesta este un email automat, nu raspunde.',
	
	
	// post_notification
	'post_notification_title'          => 'S-a postat un anunt nou',
	'post_notification_content_1'      => 'Salut Admin,',
	'post_notification_content_2'      => 'Utilizatorul :advertiserName a postat un anunt nou.',
	'post_notification_content_3'      => 'Titlul anuntului: <a href=":postUrl">:title</a><br>Postat pe: :now la :time',
	
	
	// user_notification
	'user_notification_title'        => 'Un utilizator nou s-a inregistrat',
	'user_notification_content_1'    => 'Salut Admin,',
	'user_notification_content_2'    => ':name s-a inregistrat.',
	'user_notification_content_3'    => 'S-a inregistrat pe: :now la :time<br>Email: <a href="mailto::email">:email</a>',
	
	
	// payment_sent
	'payment_sent_title'             => 'Multumim pentru plata efectuata!',
	'payment_sent_content_1'         => 'Salut,',
	'payment_sent_content_2'         => 'Ti-am primit plata pentru anuntul "<a href=":postUrl">:title</a>".',
	'payment_sent_content_3'         => 'Multumim!',
	
	
	// payment_notification
	'payment_notification_title'     => 'S-a trimis o plata',
	'payment_notification_content_1' => 'Salut Admin,',
	'payment_notification_content_2' => 'Utilizatorul :advertiserName a platit pentru un pachet la anuntul "<a href=":postUrl">:title</a>".',
	'payment_notification_content_3' => 'DETALIILE PLATII
<br><strong>Motivul platii:</strong> Anunt #:adId - :packageName
<br><strong>Suma:</strong> :amount :currency
<br><strong>Metoda de plata:</strong> :paymentMethodName',
	
	// payment_approved (new)
	'payment_approved_title'     => 'Plata a fost aprobata!',
	'payment_approved_content_1' => 'Salut,',
	'payment_approved_content_2' => 'Plata pentru anuntul "<a href=":postUrl">:title</a>" a fost aprobata.',
	'payment_approved_content_3' => 'Multumim!',
	'payment_approved_content_4' => 'DETALIILE PLATII
<br><strong>Motivul platii:</strong> Ad #:adId - :packageName
<br><strong>Suma:</strong> :amount :currency
<br><strong>Metoda de plata:</strong> :paymentMethodName',
	
	
	// reply_form
	'reply_form_title'               => ':subject',
	'reply_form_content_1'           => 'Salut,',
	'reply_form_content_2'           => '<strong>Ai primit un raspuns de la: :senderName. Vezi mesajul mai jos:</strong>',
	
	
	// generated_password
	'generated_password_title'            => 'Parola ta',
	'generated_password_content_1'        => 'Salut :userName!',
	'generated_password_content_2'        => 'Contul ti-a fost creat.',
	'generated_password_verify_content_3' => 'Apasa butonul de mai jos pentru ti-a verifica emailul.',
	'generated_password_verify_action'    => 'Verifica adresa de email',
	'generated_password_content_4'        => 'Parola te este: <strong>:randomPassword</strong>',
	'generated_password_login_action'     => 'Intra in cont acum!',
	'generated_password_content_6'        => 'Ai primit acest email pentru ca ai creat recent un cont pe :appName sau ai adaugat un email nou. Daca nu ai fost tu, ignora acest email.',


];
