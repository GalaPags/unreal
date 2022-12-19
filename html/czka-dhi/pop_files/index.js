window["BOT_WEB_INTERFACE_SETTINGS"]["monitoringPollingIntervalMs"] = 240000;
window["BOT_WEB_INTERFACE_SETTINGS"]["messagePollingConfiguration"] = {
  maxWaitTimeMs: 15000,
  basePollingIntervalMs: 3000,
  stepCountBeforeIncr: 5
};

function getChatBaseUrl() {
    return window["BOT_WEB_INTERFACE_BASE_URL"] !== undefined ? window["BOT_WEB_INTERFACE_BASE_URL"] : "/JavaHookServer/static/";
}

function loadChatBotStyleFile(file, callback) {
    var cssNode = document.createElement("link");
    cssNode.rel = "stylesheet";
    cssNode.href = getChatBaseUrl() + file;
    cssNode.onload = callback;
    document.getElementsByTagName("head")[0].appendChild(cssNode);
}

function loadChatBotScriptFile(fileES5, callback) {
    var nodeES5 = document.createElement("script");
    nodeES5.src = getChatBaseUrl() + fileES5;
    nodeES5.type = "text/javascript";
    nodeES5.charset = "utf-8";
    nodeES5.onload = callback;
    document.getElementsByTagName("head")[0].appendChild(nodeES5);
}

loadChatBotStyleFile("styles.c3e12b4995ba4514c11e.css", function(){});

loadChatBotScriptFile("runtime-es5.87c391e2731ce4c21a8e.js", function(){
    loadChatBotScriptFile("polyfills-es5.fe5b938b80faf8ee65ae.js", function(){
        loadChatBotScriptFile("main-es5.3e9ff40ea0733b0b18ff.js", function(){});
    });
});
