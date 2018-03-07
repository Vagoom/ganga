
<form
    id="contact_form"
    method="post"
    action="<?=$pages->get('/form/')->url() ;?>"
    data-parent-page="<?=$page->url; ?>"
    style="display: none;"
>
    <div>
        <div>
            <input type="text" name="firstname" placeholder="Имя:">
            <input type="text" name="lastname" placeholder="Фамилия">
            <input type="text" name="email" placeholder="Email:">
            <input type="hidden" name="parent-page" value="<?=$page->id; ?>">
        </div>
        <div>
            <textarea name="message" placeholder="Текст:"></textarea>
        </div>
    </div>
    <input id="send-form-btn" type="button" name="send" value="ОТПРАВИТЬ" style="height: 50px">
</form>
