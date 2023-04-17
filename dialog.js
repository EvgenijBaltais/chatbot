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
            <h2 class = "chat-h2">Робот-помощник</h2>
            <div class="chat-ins"></div>
        </div>
    `

    let chatStep = `
        <div class = "chat-step">
            <div class = "manager-foto" style = "background-image: url('/img/manager.jpg');"></div>
            <div class = "manager-text">lorm g e eeeg g wegwe gweg weg weg weg </div>
        </div>
    `

    document.body.insertAdjacentHTML('beforeend', chatHtml)
    document.body.querySelector('.chat-ins').insertAdjacentHTML('beforeend', chatStep)

})