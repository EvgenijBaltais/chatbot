document.addEventListener('DOMContentLoaded', () => {

    const chat = {
        
        seconds: 0,

        chatHtml: function () {
            return `
                <div class="chat">
                    <h2 class = "chat-h2">Робот-помощник</h2>
                    <div class="chat-ins"></div>
                </div>`
        },


        makeStep: (text, buttons = []) => {


            let makeButton = text => `<button class = "chat-button">${text}</button>`

            return `
                <div class = "chat-step">
                    <div class = "manager-foto" style = "background-image: url('/img/manager.jpg');"></div>
                    <div class = "manager-text">
                        ${text}
                        ${buttons.length ? `<div>${makeButton(buttons[0])}${makeButton(buttons[1])}</div>` : ''}
                    </div>
                </div>`
        },

       phrases: {
            hello: 'Добрый день! Буду рада помочь Вам оформить заказ.',
            recall: 'Есть вопросы? Хотите перезвоним Вам и расскажем подробнее?',
            howmany: 'Сколько зонтов вы хотите заказать?',
            choose: 'Вы выбрали набор',
            notFirstTime: 'Вы уже заказывали у нас?',
            thankyou: 'Спасибо за Ваш заказ! Мы свяжемся с Вами в ближайшее время для подтверждения!'
        },

        btns: {
            yes: `Да`,
            no: `Нет`,
            order: `Заказать`
        },

        init: function () {
            document.body.insertAdjacentHTML('beforeend', this.chatHtml())
            document.body.querySelector('.chat-ins').insertAdjacentHTML('beforeend', this.makeStep(this.phrases.hello))
            document.body.querySelector('.chat-ins').insertAdjacentHTML('beforeend', this.makeStep(this.phrases.howmany, [this.btns.yes, this.btns.no]))


        }

    }


    chat.init()
})