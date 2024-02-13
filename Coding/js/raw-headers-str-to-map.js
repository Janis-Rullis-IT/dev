// jr prefix is used for testing in devtools console. This allow to keep them grouped and not overlap.
const jrRawHeadersEncoded = 'host:my.machine.local%0Aaccept:*/*%0Aaccess-control-request-method:GET%0Aaccess-control-request-headers:content-type%0Aorigin:https://www.example.local%0Auser-agent:Mozilla/5.0%20(Linux;%20Android%2010;%20K)%20AppleWebKit/537.36%20(KHTML,%20like%20Gecko)%20Chrome/121.0.0.0%20Mobile%20Safari/537.36%0Asec-fetch-mode:cors%0Asec-fetch-site:cross-site%0Asec-fetch-dest:empty%0Areferer:https://www.example.local/%0Aaccept-encoding:gzip,%20deflate,%20br%0Aaccept-language:de-DE,de;q=0.9,en-US;q=0.8,en;q=0.7%0A';

const jrRawHeadersDecoded = decodeURI(jrRawHeadersEncoded);
const jrRawHeaderRows = jrRawHeadersDecoded.split("\n");
const jrRawHeadersMap = new Map();
let first, rest;

jrRawHeaderRows.forEach(function(jrRawHeaderRow){
    [key, ...value] = jrRawHeaderRow.split(':');
    if(!value.length){
        return;
    }
    jrRawHeadersMap.set(key, value.join(':'));
})
console.log(jrRawHeadersMap.get('origin'));
