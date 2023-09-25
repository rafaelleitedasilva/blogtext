<x-mail::message>
# Confirmação de Email

Olá,

Você está recebendo este email porque registrou seu email em nosso site. Por favor, clique no botão abaixo para confirmar o seu endereço de email:

Se você não solicitou esta confirmação, você pode ignorar este email:

<x-mail::button :url="route('confirmaEmail', ['email' => $email])">
Confirmar Email
</x-mail::button>

Atencioamente,<br>
BlogText
</x-mail::message>
