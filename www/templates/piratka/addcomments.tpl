[not-group=5]
<div class="form add-comments-form ignore-select" id="add-comments-form">
    <div class="form__row form__row--without-label">
        <div class="form__content form__textarea-inside">{editor}</div>
    </div>
    <div class="sendbox">
        <div class="sendboxlp">
            [not-logged]
            <div class="inputitem">
                <label for="name">Ваше имя</label>
                <input class="form__input add-comments-form__input flex-grow-1" type="text" maxlength="35" name="name"
                       id="name"/>
            </div>
            <div class="inputitem">
                <label for="mail">E-mail</label>
                <input class="form__input add-comments-form__input flex-grow-1" type="text" maxlength="35" name="mail"
                       id="mail"/>
            </div>
            [/not-logged]

            [sec_code]
            <div class="inputitem cpch">
                <label class="form__label form__label--important" for="sec_code">Введите код с картинки:</label>
                <input class="form__input" type="text" name="sec_code" id="sec_code" maxlength="45" required/>
            </div>
            {sec_code}
            [/sec_code]
        </div>

        <button class="btn add-comments-form__btn" name="submit" type="submit">Отправить</button>
    </div>

</div>
</div>
[/not-group]