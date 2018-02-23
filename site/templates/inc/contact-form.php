<h4 class="contact-heading">LAI IEGĀDĀTOS, LŪDZAM AIZPILDĪT</h4>

<form
    id="contact_form"
    method="post"
    action="<?=$pages->get('/form/')->url() ;?>"
    data-parent-page="<?=$page->url; ?>"
    style="display: none;"
>
    <div>
        <div>
            <input type="text" name="firstname" placeholder="Vārds:">
            <input type="text" name="lastname" placeholder="Uzvārds">
            <input type="text" name="email" placeholder="Epasts:">
        </div>
        <div>
            <textarea name="message" placeholder="Teksts:"></textarea>
        </div>
    </div>
    <input id="send-form-btn" type="button" name="send" value="SŪTĪT" style="height: 50px">
</form>
