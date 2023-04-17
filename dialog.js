document.addEventListener('DOMContentLoaded', () => {




    let phrases = {
        hello: 'Добрый день! Буду рада помочь Вам оформить заказ.',
        recall: 'Есть вопросы? Хотите перезвоним Вам и расскажем подробнее?',
        choose: 'Вы выбрали набор ',
        notFirstTime: 'Вы уже заказывали у нас?',
        thankyou: 'Спасибо за Ваш заказ! Мы свяжемся с Вами в ближайшее время для подтверждения!'
    }


    let chatHtml = `
        <div class="chat">
            <div class="chat-ins">
            <div class = "ov"></div>
            </div>
        </div>
    `

    document.body.insertAdjacentHTML('beforeend', chatHtml)


})