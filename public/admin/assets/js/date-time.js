const months = [
    "January",
    "February",
    "March",
    "April",
    "May",
    "June",
    "July",
    "August",
    "September",
    "October",
    "November",
    "December",
];

const d = new Date();
let month = months[d.getMonth()];
let day = d.getDate();
document.getElementById("set-date").innerHTML = day + " " + month;

setInterval(() => {
    const d = new Date();
    let hour = d.getHours();
    let minute = d.getMinutes();
    let second = d.getSeconds();
    let mili_second = d.getMilliseconds();

    document.getElementById("set-time").innerHTML =
        hour + ":" + minute + ":" + second;
}, 100);
