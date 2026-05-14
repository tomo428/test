// 1
document.write("■■■問1■■■" + "<br>");

for (var s1 = 1; s1 <= 5; s1 ++) {
    document.write("★");
}
document.write("<br>");

// 2
document.write("■■■問2■■■" + "<br>");

for (var sp2 = 1; sp2 <= 2; sp2 ++) {
    for (var s2 = 1; s2 <= 3; s2 ++) {
        document.write("★");
    }
        document.write("<br>");
}

// 3
document.write("■■■問3■■■" + "<br>");

for (var sp3 = 1; sp3 <= 2; sp3 ++) {
    for (var s3 = 1; s3 <= 5; s3 ++) {
        document.write("☆");
    }
        document.write("<br>");
}

// 4
document.write("■■■問4■■■" + "<br>");

for (var sp4 = 1; sp4 <= 4; sp4 ++) {
    for (var s4 = 1; s4 <= 5; s4 ++) {
        document.write("★");
    }
        document.write("<br>");
}

// 5
document.write("■■■問5■■■" + "<br>");

for (var sp5 = 1; sp5 <= 4; sp5 ++) {
    for (var s5 = 1; s5 <= 3; s5 ++) {
        document.write("★");
    }
        document.write("<br>");
}

// 6
document.write("■■■問6■■■" + "<br>");

for (var sp6 = 1; sp6 <= 3; sp6 ++) {
    for (var s6 = 1; s6 <= 3; s6 ++) {
        if (s6 % 2 == 0) {
            document.write("★");
        }else {
            document.write("☆");
        }
    }
    document.write("<br>");
}

// 7
document.write("■■■問7■■■" + "<br>");

for (var sp7 = 1; sp7 <= 4; sp7 ++) {
    for (var s7 = 1; s7 <= 5; s7 ++) {
        if (s7 % 3 == 0) {
            document.write("★");
        }else {
            document.write("☆");
        }
    }
    document.write("<br>");
}

// 8
document.write("■■■問8■■■" + "<br>");

for (var sp8 = 1; sp8 <= 5; sp8 ++) {
    for (var s8 = 1; s8 <= sp8; s8 ++) {
        document.write("★");
    }
    document.write("<br>");
}