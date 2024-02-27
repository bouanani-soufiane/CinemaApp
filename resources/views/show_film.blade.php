<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Movie Seat Booking</title>
</head>
<body>
<style>
    @import url("https://fonts.googleapis.com/css?family=Lato&display=swap");

    * {
        box-sizing: border-box;
    }

    body {
        background-color: #242333;
        color: #fff;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100vh;
        font-family: "Lato", sans-serif;
        margin: 0;
    }

    .movie-container {
        margin: 20px 0;
    }

    .movie-container select {
        background-color: #fff;
        border: 0;
        border-radius: 5px;
        font-size: 16px;
        margin-left: 10px;
        padding: 5px 15px 5px 15px;
        -moz-appearance: none;
        -webkit-appearance: none;
        appearance: none;
    }

    .container {
        perspective: 1000px;
        margin-bottom: 30px;
    }

    .seat {
        background-color: #444451;
        height: 26px;
        width: 32px;
        margin: 3px;
        font-size: 50px;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }

    .seat.selected {
        background-color: green;
    }

    .seat.sold {
        background-color: #fff;
    }

    .seat:nth-of-type(2) {
        margin-right: 18px;
    }

    .seat:nth-last-of-type(2) {
        margin-left: 18px;
    }

    .seat:not(.sold):hover {
        cursor: pointer;
        transform: scale(1.2);
    }

    .showcase .seat:not(.sold):hover {
        cursor: default;
        transform: scale(1);
    }

    .showcase {
        background: rgba(0, 0, 0, 0.1);
        padding: 5px 10px;
        border-radius: 5px;
        color: #777;
        list-style-type: none;
        display: flex;
        justify-content: space-between;
    }

    .showcase li {
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 10px;
    }
    .showcase li small {
        margin-left: 2px;
    }

    .row {
        display: flex;
    }

    .screen {
        background-color: #fff;
        height: 120px;
        width: 100%;
        margin: 15px 0;
        transform: rotateX(-48deg);
        box-shadow: 0 3px 10px rgba(255, 255, 255, 0.7);
    }

    p.text{
        margin: 5px 0;
    }

    p.text span{
        color: rgb(158, 248, 158);
    }

    .checkbox-wrapper-16 *,
    .checkbox-wrapper-16 *:after,
    .checkbox-wrapper-16 *:before {
        box-sizing: border-box;
    }

    .checkbox-wrapper-16 .checkbox-input {
        clip: rect(0 0 0 0);
        -webkit-clip-path: inset(100%);
        clip-path: inset(100%);
        height: 1px;
        overflow: hidden;
        position: absolute;
        white-space: nowrap;
        width: 1px;
    }

    .checkbox-wrapper-16 .checkbox-input:checked + .checkbox-tile {
        border-color: #2260ff;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
        color: #2260ff;
    }

    .checkbox-wrapper-16 .checkbox-input:checked + .checkbox-tile:before {
        transform: scale(1);
        opacity: 1;
        background-color: #2260ff;
        border-color: #2260ff;
    }

    .checkbox-wrapper-16 .checkbox-input:checked + .checkbox-tile .checkbox-icon,
    .checkbox-wrapper-16 .checkbox-input:checked + .checkbox-tile .checkbox-label {
        color: #2260ff;
    }

    .checkbox-wrapper-16 .checkbox-input:focus + .checkbox-tile {
        border-color: #2260ff;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1), 0 0 0 4px #b5c9fc;
    }

    .checkbox-wrapper-16 .checkbox-input:focus + .checkbox-tile:before {
        transform: scale(1);
        opacity: 1;
    }

    .checkbox-wrapper-16 .checkbox-tile {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        width: 2rem;
        min-height: 1rem;
        border-radius: 0.5rem;
        border: 2px solid #b5bfd9;
        background-color: #fff;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
        transition: 0.15s ease;
        cursor: pointer;
        position: relative;
    }

    .checkbox-wrapper-16 .checkbox-tile:before {
        content: "";
        position: absolute;
        display: block;
        width: 1.25rem;
        height: 1.25rem;
        border: 2px solid #b5bfd9;
        background-color: #fff;
        border-radius: 50%;
        top: 0.25rem;
        left: 0.25rem;
        opacity: 0;
        transform: scale(0);
        transition: 0.25s ease;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='://www.w3.org/2000/svg' width='192' height='192' fill='%23FFFFFF' viewBox='0 0 256 256'%3E%3Crect width='256' height='256' fill='none'%3E%3C/rect%3E%3Cpolyline points='216 72.005 104 184 48 128.005' fill='none' stroke='%23FFFFFF' stroke-linecap='round' stroke-linejoin='round' stroke-width='32'%3E%3C/polyline%3E%3C/svg%3E");
        background-size: 12px;
        background-repeat: no-repeat;
        background-position: 50% 50%;
    }

    .checkbox-wrapper-16 .checkbox-tile:hover {
        border-color: #2260ff;
    }

    .checkbox-wrapper-16 .checkbox-tile:hover:before {
        transform: scale(1);
        opacity: 1;
    }

    .checkbox-wrapper-16 .checkbox-icon {
        transition: 0.375s ease;
        color: #494949;
    }

    .checkbox-wrapper-16 .checkbox-icon svg {
        width: 3rem;
        height: 3rem;
    }

    .checkbox-wrapper-16 .checkbox-label {
        color: #707070;
        transition: 0.375s ease;
        text-align: center;
    }
</style>
<div class="movie-container">
    <label> Select a movie:</label>
    <select id="movie">
        <option value="220">Godzilla vs Kong (RS.220)</option>
        <option value="320">Radhe (RS.320)</option>
        <option value="250">RRR (RS.250)</option>
        <option value="260">F9 (RS.260)</option>
    </select>
</div>

<ul class="showcase">
    <li>
        <div class="seat"></div>
        <small>Available</small>
    </li>
    <li>
        <div class="seat selected"></div>
        <small>Selected</small>
    </li>
    <li>
        <div class="seat sold"></div>
        <small>Sold</small>
    </li>
</ul>
<div class="container">
    <div class="screen"></div>

    <div class="row">

        <input type="checkbox" name="" id="" class="seat">
        <input type="checkbox" name="" id="" class="seat">
        <input type="checkbox" name="" id="" class="seat">
        <input type="checkbox" name="" id="" class="seat">
        <input type="checkbox" name="" id="" class="seat sold">
        <input type="checkbox" name="" id="" class="seat">
        <input type="checkbox" name="" id="" class="seat">
        <input type="checkbox" name="" id="" class="seat">

    </div>

    <div class="row">
        <input type="checkbox" name="" id="" class="seat">
        <input type="checkbox" name="" id="" class="seat">
        <input type="checkbox" name="" id="" class="seat">
        <input type="checkbox" name="" id="" class="seat">
        <input type="checkbox" name="" id="" class="seat sold">
        <input type="checkbox" name="" id="" class="seat">
        <input type="checkbox" name="" id="" class="seat">
        <input type="checkbox" name="" id="" class="seat">

    </div>
    <div class="row">
        <input type="checkbox" name="" id="" class="seat">
        <input type="checkbox" name="" id="" class="seat">
        <input type="checkbox" name="" id="" class="seat">
        <input type="checkbox" name="" id="" class="seat">
        <input type="checkbox" name="" id="" class="seat sold">
        <input type="checkbox" name="" id="" class="seat">
        <input type="checkbox" name="" id="" class="seat">
        <input type="checkbox" name="" id="" class="seat">

    </div>
    <div class="row">
        <input type="checkbox" name="" id="" class="seat">
        <input type="checkbox" name="" id="" class="seat">
        <input type="checkbox" name="" id="" class="seat">
        <input type="checkbox" name="" id="" class="seat">
        <input type="checkbox" name="" id="" class="seat sold">
        <input type="checkbox" name="" id="" class="seat">
        <input type="checkbox" name="" id="" class="seat">
        <input type="checkbox" name="" id="" class="seat">

    </div>
    <div class="row">
        <input type="checkbox" name="" id="" class="seat">
        <input type="checkbox" name="" id="" class="seat">
        <input type="checkbox" name="" id="" class="seat">
        <input type="checkbox" name="" id="" class="seat">
        <input type="checkbox" name="" id="" class="seat sold">
        <input type="checkbox" name="" id="" class="seat">
        <input type="checkbox" name="" id="" class="seat">
        <input type="checkbox" name="" id="" class="seat">

    </div>
    <div class="row">
        <input type="checkbox" name="" id="" class="seat">
        <input type="checkbox" name="" id="" class="seat">
        <input type="checkbox" name="" id="" class="seat">
        <input type="checkbox" name="" id="" class="seat">
        <input type="checkbox" name="" id="" class="seat sold">
        <input type="checkbox" name="" id="" class="seat">
        <input type="checkbox" name="" id="" class="seat">
        <input type="checkbox" name="" id="" class="seat">

    </div>
</div>

<p class="text">
    You have selected <span id="count">0</span> seat for a price of RS.<span
        id="total"
    >0</span
    >
</p>
<script src="script.js"></script>
</body>
</html>
