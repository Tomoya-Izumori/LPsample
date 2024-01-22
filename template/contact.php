<section class="p-contact sticky">
  <div class="sticky-wrapper">

    <div class="section__header">
      <h2 class="section__header--h2">Contact</h2>
      <span class="section__header--h2--ja">お問い合わせ</span>
    </div>
    <div class="section__contents">

      <form action="mail.php" class="p-contact__content__form">
        <div class="p-contact__content__form__row">
          <label for="type" class="p-contact__content__form__type l-form-label l-form-required">問い合わせ種別</label>
          <select name="type" id="" class="p-contact__content__form__type l-form-select">
            <option value="order">案件のご依頼</option>
            <option value="gitec">GITECへの問い合わせ</option>
            <option value="other">その他ご相談</option>
          </select>
          <span class="l-form-select__arrow"></span>
        </div>
        <div class="p-contact__content__form__row">
          <label for="name" class="p-contact__content__form__name l-form-label l-form-required">名前</label>
          <input id="name" class="p-contact__content__form__name l-form-input">
        </div>
        <div class="p-contact__content__form__row">
          <label for="email" class="p-contact__content__form__email l-form-label l-form-required">メールアドレス</label>
          <input id="email" class="p-contact__content__form__email l-form-input">
        </div>
        <div class="p-contact__content__form__row">
          <label for="content" class="p-contact__content__form__text l-form-label l-form-required">問い合わせ内容</label>
          <textarea name="content" id="" cols="30" rows="10" class="p-contact__content__form__text l-form-area"></textarea>
        </div>
        <input type="submit" value="送信する" class="l-form-submit">
      </form>
    </div>
</section>