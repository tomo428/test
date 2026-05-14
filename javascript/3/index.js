// 1
document.write("■■■問1■■■" + "<br>");

function hankei(r) {
    return r * r * 3.14 + "<br>";
}

document.write(hankei(5));
document.write(hankei(7));
document.write(hankei(10));

// 2
document.write("■■■問2■■■" + "<br>");

function person(adalt, child) {
    return (500 * adalt ) + (200 * child) + "円です。<br>";
}
document.write(person(2,4));
document.write(person(1,5));
document.write(person(3,7));