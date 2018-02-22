<h4 class="contact-heading">LAI IEGĀDĀTOS, LŪDZAM AIZPILDĪT</h4>

<form id="contact_form" action="<?=$pages->get('/form/')->url() ;?>" method="post">
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
    <input id="send-form-btn" type="button" value="SŪTĪT" style="height: 50px">
</form>
