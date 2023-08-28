<div {{ $attributes->merge([ 'class' => 'timer timer-'.$class ]) }} id="countdown">
    <div class="timer-block">
        <div class="timer-block-items" id="days">
            <div class="text-additional-regular timer-block-item">1</div>
            <div class="text-additional-regular timer-block-item">2</div>
        </div>
        <div class="text-extra-regular timer-block-title">дней</div>
    </div>
    <div class="timer-block-point">:</div>
    <div class="timer-block">
        <div class="text-additional-regular timer-block-items" id="hours">
            <div class="text-additional-regular timer-block-item">1</div>
            <div class="text-additional-regular timer-block-item">2</div>
        </div>
        <div class="text-extra-regular timer-block-title">часов</div>
    </div>
    <div class="text-additional-regular timer-block-point">:</div>
    <div class="timer-block">
        <div class="timer-block-items" id="minutes">
            <div class="text-additional-regular timer-block-item">1</div>
            <div class="text-additional-regular timer-block-item">2</div>
        </div>
        <div class="text-extra-regular timer-block-title">минут</div>
    </div>
</div>

@desktopcss
<style>
    .timer {
        display: flex;
        align-items: center;
    }

    .timer-block {
        text-align: center;
    }

    .timer-block:not(:last-child) {
        margin-right: 10px;
    }

    .timer-block-point {
        margin-right: 10px;
        margin-bottom: 25px;
    }

    .timer-block-items {
        display: flex;
    }

    .timer-block-item {
        background: var(--color-main-white);
        border-radius: 8px;
        align-items: center;
        width: 30px;
        height: 30px;
        justify-content: center;
        display: flex;
        margin-bottom: 5px;
    }

    .timer-block-item:not(:last-child) {
        margin-right: 5px;
    }

    .timer-big .timer-block-item {
        width: 60px;
        height: 60px;
        font-weight: 400;
        font-size: 34px;
        line-height: 50px;
    }

    .timer-big .timer-block-point {
        font-weight: 400;
        font-size: 34px;
        line-height: 50px;
    }

    .timer-big .timer-block-title {
        font-size: 14px;
        line-height: 20px;
    }

    .timer-big {
        justify-content: center;
        margin-bottom: 25px;
    }


</style>
@mobilecss
@endcss

@startjs
<script>
//     (function () {
//         const second = 1000,
//             minute = second * 60,
//             hour = minute * 60,
//             day = hour * 24;

        
//         let today = new Date(),
//             dd = String(today.getDate()).padStart(2, "0"),
//             mm = String(today.getMonth() + 1).padStart(2, "0"),
//             yyyy = today.getFullYear(),
//             nextYear = yyyy + 1,
//             dayMonth = "09/30/",
//             subscription = dayMonth + yyyy;
        
//         today = mm + "/" + dd + "/" + yyyy;

//         if (today > subscription) {
//             subscription = dayMonth + nextYear;
//         }
  
//         const countDown = new Date(subscription).getTime(),
//             x = setInterval(function() {    

//                 const now = new Date().getTime(),
//                     distance = countDown - now;

//                 document.getElementById("days").innerText = Math.floor(distance / (day)),
//                 document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
//                 document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute));
//                 // document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);

//                 if (distance < 0) {
//                     document.getElementById("headline").innerText = "Доступ заблокирован";
//                     document.getElementById("countdown").style.display = "none";
//                     document.getElementById("content").style.display = "block";
//                     clearInterval(x);
//                 }

//       }, 0)

//   }());

</script>
@endjs