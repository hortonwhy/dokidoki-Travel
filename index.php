<!DOCTYPE html>

<html lang="en">

<head>
  <title>Dokidoki Travel</title>
  <meta charset="UTF-8">
  <meta name="description" content="ENTER DESCRIPTION HEcRE">
  <meta name="author" content="ENTER NAME HERE">
  <link rel="stylesheet" href="main.css">
  <script src="jquery-3.6.0.min.js"></script>
  <script src="script.js" defer></script>
  <script src="navBar.js" defer></script>
</head>

<body>

  <a href="index.php"><img id="logo" src="assets/images/logo.png" alt="logo pic" width="125px"></a>
  <div id="navBar">
    <table>
      <tr>
        <th><a href="index.php">ドキドキ Travel</a></th>
        <th><a href="anime.php">Anime</a></th>
        <th><a href="prefectures.php">Prefectures</a></th>
	<th><a href="blogpost.php">Blog</a></th>
        <th><a href="aboutUs.html">About Us</a></th>
        <th><a href="contactUs.html">Contact Us</a></th>
      </tr>
    </table>
  </div>

  <?php
  if (isset($_COOKIE["theme"])) {
    $css = $_COOKIE["theme"];
  } else {
    $css = "default";
  }
  echo "<div id='body' class='" . $css . "'";
  ?>
  <div id="description">
    <!-- <div id="map"> -->
    <?php
    echo "<form method='post' id='chooseTheme'" . "action=" . $_SERVER['PHP_SELF'] . ">";
    if (isset($_COOKIE["theme"])) {
      $css = $_COOKIE["theme"];
    } else {
      $css = "default";
    }
    echo "<table id='themeForm'" . "class='" . $css . "'>";
    ?>
    <tr>
      <td><label>Map Themes</label> </td>
    </tr>
    <tr>
      <td><label>Default</label><input type='radio' name='theme' value='default'> </td>
    </tr>
    <tr>
      <td><label>Black</label><input type='radio' name='theme' value='black'> </td>
    </tr>
    <tr>
      <td><label>White</label><input type='radio' name='theme' value='white'> </td>
    </tr>
    <tr>
      <td><label>Reset Cookies</label><input type='checkbox' name='cookieClear' value='clear'> </td>
    </tr>
    <tr>
      <td><input type='submit' value='Submit'></td>
    </tr>
    </table>
    </form>



    <?php
    if ($_POST) {
      if (!isset($_POST['cookieClear'])) {
        setcookie("theme", $_POST['theme'], time() + 12000, "/");
        header("Location: " . $_SERVER['PHP_SELF']);
        echo "Cookie set: " . $_POST['theme'];
      } else {
        setcookie("theme", "", time() - 3600, "/");
        header("Location: " . $_SERVER['PHP_SELF']);
      }
    }
    $themes = array(
      "default" => "<svg 
                    xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1474.63 1113.76'><defs><style>.cls-1{fill:#b3b3b3;}.cls-1,.cls-10,.cls-11,.cls-2,.cls-3,.cls-4,.cls-5,.cls-8,.cls-9{stroke:#000;}.cls-1,.cls-10,.cls-11,.cls-2,.cls-3,.cls-4,.cls-5,.cls-6,.cls-7,.cls-8,.cls-9{stroke-miterlimit:10;}.cls-2{fill:#ed1c24;}.cls-3{fill:red;}.cls-4{fill:#fbb03b;}.cls-5,.cls-6{fill:#662d91;}.cls-6,.cls-7{stroke:#0c1000;}.cls-7,.cls-8{fill:aqua;}.cls-9{fill:lime;}.cls-10{fill:#ff0;}.cls-11{fill:#ff6d24;} path:hover { opacity: 0.5;}",

      "black" => "<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1474.63 1113.76'><defs><style>.cls-1{fill:#191919;}.cls-1,.cls-10,.cls-11,.cls-2,.cls-3,.cls-4,.cls-5,.cls-8,.cls-9{stroke:#fff;}.cls-1,.cls-10,.cls-11,.cls-2,.cls-3,.cls-4,.cls-5,.cls-6,.cls-7,.cls-8,.cls-9{stroke-miterlimit:10;}.cls-2{fill:#191919;}.cls-3{fill:#191919;}.cls-4{fill:#191919;}.cls-5,.cls-6{fill:#191919;}.cls-6,.cls-7{stroke:#0c1000;}.cls-7,.cls-8{fill:#191919;}.cls-9{fill:#191919;}.cls-10{fill:##191919;}.cls-11{fill:##191919;} path:hover { opacity: 0.5;}",

      "white" => "<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1474.63 1113.76'><defs><style>.cls-1{fill:#f2f2f2;}.cls-1,.cls-10,.cls-11,.cls-2,.cls-3,.cls-4,.cls-5,.cls-8,.cls-9{stroke:#000;}.cls-1,.cls-10,.cls-11,.cls-2,.cls-3,.cls-4,.cls-5,.cls-6,.cls-7,.cls-8,.cls-9{stroke-miterlimit:10;}.cls-2{fill:#f2f2f2;}.cls-3{fill:#f2f2f2;}.cls-4{fill:#f2f2f2;}.cls-5,.cls-6{fill:#f2f2f2;}.cls-6,.cls-7{stroke:#0c1000;}.cls-7,.cls-8{fill:#f2f2f2;}.cls-9{fill:#f2f2f2;}.cls-10{fill:#f2f2f2;}.cls-11{fill:#f2f2f2;} path:hover { opacity: 0.5;}"

    );
    if (isset($_COOKIE["theme"])) {
      echo "<div id='map' class=" . $_COOKIE['theme'] . ">";
      echo $themes[$_COOKIE["theme"]];
      echo $_COOKIE["theme"];
    } else {
      echo $themes["default"];
    }
    ?>
    </style>
    </defs>
    <title>Prefectures</title>

    <g id="Okinawa">
      <path onclick=showDetail("Okinawa") class="cls-1" d="M207.58,1132.17s-11.58,6.17-11.33,10.58-9.25,5.33-9.25,5.33-7.92-12.17-11.67-8.33,4,9.67,4,9.67l-1.67,2.17s-2.63-1.58-3.36,0a41,41,0,0,0-1.56,4.58l-11-.33s-7.42,7.08,0,11.58c0,0-12.25,6.17-11.75,9.42s2.67,10.33,9.58,9.17,9.42-3.67,9.42-3.67l-.75-2.17-4.33-.92s1.25-9.17,4.08-9a28.12,28.12,0,0,0,5.92-.42l-.33-7,8.58-.25s7.33-7.33,8.58-7.5,7-.17,7-.17,17.58-6.83,16.33-16.08S207.58,1132.17,207.58,1132.17Z" transform="translate(-149.49 -72.87)" />
    </g>
    <g id="Nagasaki">
      <path onclick=showDetail("Nagasaki") class="cls-1" d="M261.25,994.25s-9.5,9.33-9.25,10.42,12.58,11.33,13.42,14.08,0,9.83,0,9.83-6.88,4.75-6.53,6.92-.64,6.75,4.53,3.83,13.92-10,13.92-10,6.58-5.67,8.25-5.33,2.83-.92,5.17.58.75,7.67.75,7.67-4.08,1.67-5,2.58-2,2.6,0,3.46,17.33.45,17.33.45,9.67-3.83,6.67-7.42-.5-9.25-16.67-12.42l3.75-8.58s-2.91-4.09-10.08-4h0l-6.37-15.87s-14.87-4.33-8.37-14.75h0s-5.25-7.09-10.67-4.63S251,979.42,252,982.83s23.09,16.58,23.09,16.58,5.75,11.75,5.08,13.75-1.42,4.33-3.75,2.5S261.25,994.25,261.25,994.25Z" transform="translate(-149.49 -72.87)" />
    </g>
    <g id="Saga">
      <path onclick=showDetail("Saga") class="cls-1" d="M292.75,970.2s-.5-16.2-6.12-13.57-10.5,19.13-10.5,19.13h-3.37s-4,5.75,0,9.63a22.17,22.17,0,0,0,8.38,5.13l6.38,15.88s8.5.63,9.63,3.38,4.38-3.94-3.12-9.28l1-5.47s6.25-2.25,7.88-1.25,7.13,4,7.13,4,2.88-9,5.63-6.37S327.5,987,327.5,987s4.63-11.12-2.5-10.25h0s-7.5,4.64-8.25,3S309,969,309,969s-5,6.88-13.25,0h0Z" transform="translate(-149.49 -72.87)" />
    </g>
    <g id="Kumamoto">
      <path onclick=showDetail("Kumamoto") class="cls-1" d="M286.5,1044.63s-7.25-4-11.12,6-8.75,15-7.62,18,2.5,5.63,6,4.25,16.25-10.25,16.13-12.37c0,0,16.13,2.38,18-3.12s3.63,6.13,3.63,6.13l-2.75,7.75L300,1072.5s-6.75,4-4.12,7.63,7.25,3.88,17.13,1h0l10.75,11.38h9.75l3.75-3.12,8.25,1.38,9-7.25s1.38-13.75-1.25-13.62-2.27-9.2-2.88-9.75,4.3-8.88,26.26-21.38h0s-.87-10.58-4.25-10.87h0s4-4.29-2.29-21.12c0,0-9.14,1.33-9.9-5.09s.69,15.09.69,15.09S349,1028.17,349.25,1012h0l-7.37-2.37s-6.39-6.47-7.37-5.5-7.77,2.5-9.89,3.56-9.36,9.06-9.36,9.06,3.33,15,9.42,15.17c0,0-5.33,8.5-15,10.92s-5.67,7.58-5.67,7.58S284.67,1047.67,286.5,1044.63Z" transform="translate(-149.49 -72.87)" />
    </g>
    <g id="Kagoshima">
      <path onclick=showDetail("Kagoshima") class="cls-1" d="M323.75,1092.5,313,1081.13s-13.87,5.25-17.12-1l-18.37-.62v10.25s8.25,3.21,3.13,7.17-7.37,5.46-7.37,5.46,10,11,10,15v9.38s-6.62,2.25-7.37,9.38c0,0-8.37-3.25-10.25-6s-2,6-2,6,4,1.38,4.88,4.38-.25,10.25-.25,10.25H288.5s1.5,9.38,3.63,9.88,4.38,3.75,11.25-3.62c0,0,.25-6.75-5.62-4.87,0,0-2.5-15.5.88-18.75s9-16,9-16h4.88s6.13,6.5,5.5,9a3.31,3.31,0,0,1-2.87,2.63s-6.12-3.75-7.87-1.87-4.75,6.38-2.25,7.63,8.13,1.38,8.13,1.38l-.37,15s-4.87,9.38-4.12,11.88c0,0-9.25,5.5-9.25,8.75s.13,5.63,5.38,4.5,15.63-6.37,15.63-6.37,16.63-7.5,16.25-11.25a6.8,6.8,0,0,0-3.75-5.25l.25-5.5s4.13-1.87,6-.37,6.63,2,6.63,2l1.88-16.12-7.75-5.5s.5-9.12-12-11.12h0l3.25-6.12-7.37-8.37v-9.75" transform="translate(-149.49 -72.87)" />
    </g>
    <g id="Miyazaki">
      <path onclick=showDetail("Miyazaki") class="cls-1" d="M376.63,1038.75s-27.62,17.38-26.25,22.13.13,7.13,2.88,9,1.25,13.63,1.25,13.63-7.37,8-9,7.25-8.25-1.37-8.25-1.37l-3.75,3.13h-9.75v9.75s8,8,7.38,8.38-3.25,6.13-3.25,6.13a38.22,38.22,0,0,1,7.88,3c3.75,2,4.13,8.13,4.13,8.13l7.75,5.5-1.87,16.13s5.63,6.63,8.5,6,6.25-1.37,6.75-14.5l8.25-1.87s1.63-31.12,9.25-36.37c0,0,35.68-51.47,41.25-50.87,0,0-7-.5-8.12-6.37h0s-22.12,5.38-24.75-5.37h0s-9.84-2.92-10.25-1.37" transform="translate(-149.49 -72.87)" />
    </g>
    <g id="Oita">
      <path onclick=showDetail("Oita") class="cls-1" d="M379.82,975.56s9.55-.18,10.3.57,4.75,6.88,12,1.88,2.63-8.25,7.38-7.75,9.88,7,9.5,8.88S419,998,419,998s-15.89.88-17,2-4.25,6,0,9l12.81-.62s.19,4.5,1.44,4.25a5.53,5.53,0,0,1,2.25,0s1-7.89,3.13-6.64,7.25,3.52,7,6.64-5.87,14.36-3.12,20,5.75,8.75,5.13,12.13-3.62,10.63-10.87,7.13-8.12-6.37-8.12-6.37-20.87,5.13-24.75-5.37c0,0-9.12-2.75-10.25-1.37s.75-8.25-4.25-10.87c0,0,3.25-10.5-2.25-20.62,0,0-9.37-.12-9.87-5s.63,14.5.63,14.5-11.86,11-11.62-4.75l.25-17a21.9,21.9,0,0,0,4-8h0s12.51-6.25,13.14-8,10.74,4.17,11.78,1.35a34.69,34.69,0,0,0,1.42-4.79" transform="translate(-149.49 -72.87)" />
    </g>
    <g id="Fukuoka">
      <path onclick=showDetail("Fukuoka") class="cls-1" d="M358,940.5H348s-4.5,7.25-11.25,0-14.5,19.5-14.5,19.5-6,10.25-10.25-2.75S295.75,969,295.75,969s7.71,6.66,13.25,0c0,0,7.5,8.75,7.75,10.75s8.25-3,8.25-3,7.88-.87,2.5,10.25c0,0-8.62,6.63-11.87,4.38s-5.62,6.38-5.62,6.38,4.63,2.63,3.63,7,1.63,12,1.63,12,10-8.75,9.5-9.5,9.63-1.12,9.75-3.12,7.38,5.5,7.38,5.5l7.38,2.38.25-17s4.25-4.5,3.38-7.75c0,0,14.38-5.75,13.75-8.25s11.75,4.38,12.25.5,4-3.5-5.75-8.87c0,0-.37-24.5-3.62-25.12S358,940.5,358,940.5Z" transform="translate(-149.49 -72.87)" />
    </g>
    <g id="Ehime">
      <path onclick=showDetail("Ehime") class="cls-2" d="M563.3,973.57s-4.8,5.18-7.55,4.93-13-1.86-16.14-4.93c0,0-6.11,6.3-11.36,1.3s-8.37-16.12-10.62-19.12-8.62,7.38-8.62,7.38-2.87-.5-4.37-.62-5.37,5-5.25,8.88l-4.5-.12s-2.37,17-6.5,17.88-20.67,8-20.67,8l-9.7-.87-17.37,8.63s-.75,3.75,3.5,4.88,11.63,0,11.63,0,3.75-4.12,5-5.87,2.38.25,2.38.25l1.25,1.63s-4.37,10.38.13,14.13-2.87,9.63-2.87,9.63l-.5,12s2.66,8.13,6.58,8c0,0,6.82,2.73,11.19.49s4.11-9.74,4.11-9.74-7,2.87-6.6-3.25,3.79-6.51,3.79-6.51l6.69.51,5.13-5.62s3.13,1.75,5.75-2.12h0l.63-14,7.25,2.38c2.13,2.88,23.59-25.59,25.13-25s8.25,3.64,29,0h0l9.42,2.86-1.53-11.33-4.33-4.6" transform="translate(-149.49 -72.87)" />
    </g>
    <g id="Kochi">
      <path onclick=showDetail("Kochi") class="cls-2" d="M569.17,989.5s-6.42-3.5-10.42-2.75-18.62,4.16-28-.11c0,0-21.37,26-25.12,25s-7.25-2.37-7.25-2.37l-.62,14s-2.75,3.88-5.75,2.13c0,0-4.25,2.38-5.12,5.63,0,0-6.5-1.37-8,0s-3.62,6.5-1.75,8.63,5.88.63,5.88.63-5.47,13.13-6.61,15.38-6.26,4.63-6.26,4.63a73,73,0,0,1,7.13,3.75c2.5,1.63.88,5.88.88,5.88s5.88,2.38,7,1.25a12,12,0,0,0,2-3.37l4,.5s12.63,9.5,13.25,4.75-5.87-7.5-5.87-7.5l-.25-3.75,4.25-1.25.38-8.75,7.5-.37s18.75-23.25,16.75-27.25l14.38-.12s2-6,6.63-6.62,16-.37,16-.37,2,3.25,5,3.25,7.08.25,7.08.25,7.38,29.88,14.25,28.13,18.6-22,18.6-22a15.57,15.57,0,0,0-10.27-3.48h0l.42-15.42s-4.5-3.81-13.78-7.31" transform="translate(-149.49 -72.87)" />
    </g>
    <g id="Tokushima">
      <path onclick=showDetail("Tokushima") class="cls-2" d="M630.5,970.33S642.67,972,642.67,977s-6.08,7.33-6.08,7.33l-2.25,1.33s4.67,14.33,6.33,18.17-2.33,6.83-2.33,6.83L630.5,1012s-3.17,7.67-5.5,7.5-8.67-1.67-14.5,8.83c0,0-1.83-4.33-11.67-5.17,0,0,.67-6.5.83-14s-36.83-12.5-30.5-19.67l-.67-10s10.5-14.83,31.5-1.67h0a6.83,6.83,0,0,0,5.33-5.31h0s16.83-1.86,17.5,1.81,9,7.83,7.67-4" transform="translate(-149.49 -72.87)" />
    </g>
    <g id="Kagawa">
      <path onclick=showDetail("Kagawa") class="cls-3" d="M630.5,970.33s-22-10.5-22-18.83c0,0-17.67,2.79-19.67-1.27,0,0-32.33,17.15-26.67,22.29s6.33,7,6.33,7,7-6.62,11.83-7A29.31,29.31,0,0,1,600,977.83s5.17-1.12,5.33-5.31c0,0,16.5-2,17.5,1.81s3.92,3.83,3.92,3.83S631.83,979.33,630.5,970.33Z" transform="translate(-149.49 -72.87)" />
    </g>
    <g id="Yamaguchi">
      <path onclick=showDetail("Yamaguchi") class="cls-4" d="M438,894s-5-3.87-10.37-2.75a10.93,10.93,0,0,0-7.37,5l-1,3.63-6.62,1.75-10.87,8.13-7,2.25s-9.87-11.45-12-10.48S374.5,909,374.5,909s-5.87-4.5-9.87-.75,4.63,10.88,4.63,10.88-8.75,11.63-7.12,16.38a19.37,19.37,0,0,0,5.88,8h3.63s-.12-6.62.75-6.87,10,5.13,14.38,10.88l11.38.63,1.84-4.37,3.16,5h3.63l1.63-3.3,6.25,2.75s9.5.13,11.63-3.62c0,0,28.88,30.25,32.25,27.75,0,0,3.75-.75,2.38-3.25s-4.87-4.87-4.87-4.87-.75-2.5.75-3,6.5,2.25,7.88-.75,5.24-29.66,1.48-31.68-10.86-4.94-10.86-4.94-9.52-1.54-9.7,0h0s-2.74,1.14-4.05,6.46h0s-13.19,1.38-8.5-9.75h0s3.56-2.5,3.13-4.37-3.69-4.37-4.5-3.62,0-9.25,0-9.25L438,894" transform="translate(-149.49 -72.87)" />
    </g>
    <g id="Hiroshima">
      <path onclick=showDetail("Hiroshima") class="cls-4" d="M455.25,923.88s16.92,5.63,16.42,11.63,7-5.81,7-5.81,10.17-2.35,7.83,9.31,10.17,9.67,10.17,9.67,11.67.83,12.67-5.67,10.5.33,10.5.33,5.5,3.67,14-4.67c0,0,7.17-2.17,9.33-.83s4,6.5,5.5,6,13.25.42,17.21-6.71h0l-6.25-21.5s1-15.37-4.62-18.12h0s-2.91-10.34,1.42-15.42h0S545.35,886,544.86,880h0s-13,2.88-19.74-3.25h0l-7.75,8.13s-7.92-1.9-7.5-.62,5.79,9.1,7,9.24-1.47,5.3-23,3h0a20.89,20.89,0,0,0-15.5-4.87c-9.25,1-23.5,25.88-23.12,32.25" transform="translate(-149.49 -72.87)" />
    </g>
    <g id="Shimane">
      <path onclick=showDetail("Shimane") class="cls-4" d="M565.33,850s3.42-3.12,1.42-6.62-19.5-4.62-21-2.5-4.5-2.75-4.5-2.75-24.75.38-27,9.38,0,9.88,0,9.88H503.88S440.63,891,442.5,894H438s-5.12,7.88-6.37,9.38,0,9.25,0,9.25,4.63,2,4.5,3.63-3,5.13-3.12,4.38-1.87,4.63.13,7.38,8.38,2.38,8.38,2.38,1.13-6.87,6-6.87a66.37,66.37,0,0,1,7.75.38s8.88-30.37,23.13-32.25c0,0,13.88-.12,15.5,4.88,0,0,28.25,1.25,22.25-4s-6.25-8.24-6.25-8.24,4.25-1.13,7.5.62l7.75-8.12s12.1,6.5,19.74,3.25h0s.35-6.67,16.3-11.33h0s-4.25-1.17,4.17-18.67" transform="translate(-149.49 -72.87)" />
    </g>
    <g id="Okayama">
      <path onclick=showDetail("Okayama") class="cls-4" d="M648.4,884.41s-5.19,12.95-11.73,11.27h0s-10.33,6.9-9.5,8.49h0s-1,21,0,22.5h0S613.75,937,609.63,936s-12.75,8.5-12.75,8.5-27.5.5-31-7.37-6.25-21.5-6.25-21.5,2.75-12.5-4.62-18.12c0,0-2-14.44,2.57-15.68s29.8-9.95,29.55-11.07,6.63-.37,6.63-.37.64,6.75,2.29,7.31,8.21.06,8.21.06,5.67-5.91,7.52-5.27,12.85,12.77,12.85,12.77l23.27-.57.5-.26" transform="translate(-149.49 -72.87)" />
    </g>
    <g id="Tottori">
      <path onclick=showDetail("Tottori") class="cls-4" d="M650.82,855.61s-32.32,7.73-34.16,2.73c0,0-18-2.79-19.33-2.73s-18.83-9.27-32-5.61c0,0-7.5,14.5-4.17,18.67,0,0-21,6.67-15.33,12.83s41.29-10.75,41.29-10.75l6.63-.37s-.12,7,3.25,7.75a17,17,0,0,0,7.25-.37s6.63-7.5,9.38-4.62,11,12.13,11,12.13,22.94,2.29,24.54-1.66a55,55,0,0,0,2.51-8.75l-6.33-9.17,5.49-10.06" transform="translate(-149.49 -72.87)" />
    </g>
    <g class="hyogo" id="Hyogo">
      <path onclick=showDetail("Hyogo") class="hyogo cls-5" d="M685.5,857.5s-28.33-2.7-30.67-5-9.5,13.18-9.5,13.18,5.17,8.17,6.33,9.17-5.83,20.86-14,20.85h-1s-9.67,6.32-9.5,8.49-1,15.83,0,22.5,5,6.5,5,6.5l4.5-3.17,25.17,1s12.83,20.5,20.42,19.17,20.75-.38,23.5-7.79,4.88-25.08,4.88-25.08l-2.37-8.8s-8.07-.26-26-21.5c3.36,3.87,3.89,4.94,0,0l1.25-3.5s11.7-6.32,10.85-6.83h0s.05-6.66-2-6.42a47.36,47.36,0,0,0-6.86,2V857.5" transform="translate(-149.49 -72.87)" />
      <path onclick=showDetail("Hyogo") class="hyogo cls-5" d="M675.13,949.5s-31.75,7.63-30.37,16.75,4.13,8.25,4.13,8.25l1.75,6.13s4.63,1.42,6.5-2.35c0,0,11.38,1.35,11.56-1.15s.81-5.12-3.94-9.25c0,0,.25-7.12,3.94-8.62s9.06-6.37,8.44-7.87S678.38,949.75,675.13,949.5Z" transform="translate(-149.49 -72.87)" />
    </g>
    <g id="Osaka">
      <path onclick=showDetail("Osaka") class="cls-5" d="M710.63,917.3s-1.5,23-4.87,25.08c0,0-1.75,12.88-1.37,16s-16.48,12.44-17.05,12.1h0s1.8,2.65,1.55,5.15h0s11.5-.08,12.25,2.65h0l2.08.38S718,969.74,722,974.87h0s2.64-2,4.26-3.5h0s-2.38.26,3-28h0L725,928.75S716.75,932.84,710.63,917.3Z" transform="translate(-149.49 -72.87)" />
    </g>
    <g id="Wakayama">
      <path onclick=showDetail("Wakayama") class="cls-5" d="M733.25,1039.25s-12.25,17.75-18.62,17-23.87-11-29.87-23c0,0,.63-6.75,1.63-8.5,0,0-17.12-11.12-15.87-17.5s1-19.12,12.88-17.75c0,0-14.75-11.37-6.5-19.37,0,0,7.75-.75,9.88,0s2.13,5.5,2.13,5.5,10.63-.45,12.25,2.65,16.48-8.91,20.87-3.4-.5.49-.5.49a13.85,13.85,0,0,0,.89,13.26h0s-10.11-.75-9.87,1.25h0s-3.43,1.88-4.78,8.75,2.27,19.7,9.9,20.79,8.53-.82,8.53-.82l-.9,1.9s-3.25,6.13,0,6.75,9,10.61,8,12" transform="translate(-149.49 -72.87)" />
    </g>
    <g id="Nara">
      <path onclick=showDetail("Nara") class="cls-5" d="M729.25,943.38S725,966.63,726.38,972c0,0-6.5,3-6.25,6.27,0,0-.62,6.6,2.25,10.35,0,0-9.37-.75-10.62,2.13s-7.12,7.38-1.87,20.63S729,1017.5,729,1017.5s10.83-3.87,11-5.25,5.58-4.07,8.86-2.6,7.41-9.9,7.41-9.9L751,990.13l1.77-10.63H762s2.38-4.7.75-6.25-9.75-7-9.75-7l2.4-9.26s-4.15-5-19.4-4.49h0s-5.32-4.93-6.75-9.12" transform="translate(-149.49 -72.87)" />
    </g>
    <g id="Mie">
      <path onclick=showDetail("Mie") class="cls-6" d="M811.76,917.3s-10,7.61-12.76,6.52-7.89-6.52-7.89-6.52l-4.44,19.1S782,943.25,775,944.75s-6.25-2.5-6.25-2.5-1.25,6.75-13.5,3.5h0s-4.5,1-4.5,8.5h0s5,1.42,4.75,3.33-2.5,8.67-2.5,8.67,8,4.75,9.75,7-.75,6.25-.75,6.25-8.75-1-9.25,0-2,8.75-1.75,11.5,5.25,8.75,5.25,8.75-4.87,10.4-8.25,10-6.54.24-8,2.49-11,5.25-11,5.25-3.75,2.25-3.75,3-2.5,6.5,0,6.75,7.5,6.5,8,12h5.5s4.5-19,10-17,11-1.75,11-1.75,2.4-23.14,16.63-18.93c.41.12,1.09.87,1.26.43,0,0,2.36,0-.85-.31,0,0,16,2.31,16.7-4.44,0,0,6.75,10.25,9.5,8.25s3.67-8.75,3.67-8.75,6.08.75,6.58-2.75,4-4.75,0-8.25S791.11,973,791.11,973s3.89-15.25,1.39-16.75c0,0,11.25-8.5,8.5-12.75l8.25-2.75.45-4.1-3-6.32,5.09-13" transform="translate(-149.49 -72.87)" />
    </g>
    <g id="Shiga">
      <path onclick=showDetail("Shiga") class="cls-6" d="M782.25,906s-3.65-14.05-7.75-12.5a68.23,68.23,0,0,0-9,4.5s2,6-18.5,11.75h0s-.79,7.75-7,12.25h0s4.52,5.75,1.27,16h0l14,7.75s14,1,13.5-3.5c0,0,4.25,4,6.25,2.5s11.25-4.5,12-9.5,4.11-16.85,4.11-16.85S778.75,908,782.25,906" transform="translate(-149.49 -72.87)" />
    </g>
    <g id="Kyoto">
      <path onclick=showDetail("Kyoto") class="cls-5" d="M785,911.33s6.51,1.69,10.88-10.95-.46-1.05-.46-1.05l-7.42-20L781,875s1.5,15.75-17,12h0l-13.57,7.74L727.33,894l-4.86-10.46s-1.06-6.12,2.86-10.2-8.58-2.08-8.58-2.08-2.25,3.5-3.75,2.5-1.75-6.75,0-6.75,7.75-1.75,7.75-1.75l1.72-2.75-8-10-29,4v15.75s7.25-3.5,8.25-1.25,1.5,5.45-.25,6.85-10,5.65-10,5.65l-1.25,3.5s17.5,21.5,26,21.5c0,0,6,24.5,16.75,20.25,0,0,5.5,25,11,23.75s14.75,1.75,14.75,1.75-.25-9.75,4.5-8.5-14-7.75-14-7.75,4-12.25-1.27-16c0,0,7-6.5,7-12.25,0,0,20.5-5.25,18.5-11.75,0,0,5.75-4,9-4.5s9.75,11.25,7.75,12.5,2.75,5.33,2.75,5.33" transform="translate(-149.49 -72.87)" />
    </g>
    <g id="Aichi">
      <path onclick=showDetail("Aichi") class="cls-7" d="M811.76,917.3s-5.09,12.7-5.09,13,5.09,10.42,5.09,10.42S811.67,977,819.33,972s23.76-7.33,23.76-7.33,4.91,7.28,1.57,7.81-22,.19-22,7.19,34.74,0,34.74,0,.33-15.12,3.26-16l21-6.33L888,940.75s-.72-4.25-12.36-4.42h0s-6.31-4.33-4-5.67S864,932,864,932s1.5-4.42-19.67-5c0,0-3.1-12.83-7-13.67s-17-1.33-17-1.33l-8.58,5.3" transform="translate(-149.49 -72.87)" />
    </g>
    <g id="Shizuoka">
      <path onclick=showDetail("Shizuoka") class="cls-7" d="M926.33,915,916,931l-8.67.67s-4.2,10.67-5.27,7S888,940.75,888,940.75l-6.33,16.58-21,6.33s-7.33,19.67,0,16.67,45.33,10.33,51.33,15,5.33-14,5.33-14,3.67,7,11-8.67c0,0,14.67,1.33,14-2a31.34,31.34,0,0,1,0-8.33s8.31-2.67,13-.33l8,2v5l-6.52,4s-13.48,16-7.48,18c0,0,1,16,9.33,19s32.33-24,29.67-26.33-6-17.33-6-17.33l-4-3.33V952.67l4-5.67L977,940.75s5.67,10.92-11.33-2.08h0s-6.67,6.33-14-2.33h0l-6,4.42s-1.33,17.58-7.67,11.92h0s-2,8.83-5.33-11.92h0l-4.33-6.42-2-18" transform="translate(-149.49 -72.87)" />
    </g>
    <g id="Yamanashi">
      <path onclick=showDetail("Yamanashi") class="cls-7" d="M971.55,888.74,952.33,886l-18,4.67-8,14.67v11s2,16.67,2,18,4.33,6.42,4.33,6.42.67,18.58,5.33,11.92c0,0,6.67.83,7.67-11.92l6-4.42s4.67,4.83,7.67,4.42a24.41,24.41,0,0,0,6.33-2.08s12.18,11.39,12.6,4.67.07-11,12.07-10.33h0s4.55,3.24,5.77-7.55h0L985,916.33s3-1,0-10.67h0l-10.67-3s-4.57-8.51-2.79-13.92" transform="translate(-149.49 -72.87)" />
    </g>
    <g id="Fukui">
      <path onclick=showDetail("Fukui") class="cls-7" d="M795.42,823.7s-29.08,8.63-29.42,18.63,8,22,9,23.33-2.33,6.67-2.33,6.67-5-5.64-8.33-4.15-2.33,9.67-2.33,9.67-6.67-4.85-8.67-3.85-2.67,3.85-2.67,3.85L742,881.13s-6.67-5.46-7.67-4.79-6,4.79-6,4.79l-3-7.79s-4.33,4.92-2.33,7.79-.53,2.41-.53,2.41,4.53,9.13,4.86,10.46S748,897,752,894s12-7,12-7,16.33,5.67,17-12l7,4.33a16.74,16.74,0,0,1,10.67-9.67h0s13.67,2,11.67,4.33,21.16-.67,22.08-4.33h0s-9.41-8-8.08-18.33h0s-11.67-13-23.33-13h0s-5.5.41-5.58-14.63h0" transform="translate(-149.49 -72.87)" />
    </g>
    <g id="Gifu">
      <path onclick=showDetail("Gifu") class="cls-8" d="M824.33,851.33s.33,13.7,7,16.85-18,8.48-21,5.82-11.67-4.33-11.67-4.33S787,875,788,879.33s4.5,16.33,7.42,20-6.75,16-10.42,12c0,0,9.33,12.31,14,12.49s20-12.15,21.33-11.82,13-.33,17,1.33,7,13.67,7,13.67,19.33,0,19.67,5l7.67-1.33s8.94-14.17,12.31-11.92-1-10.42-8.33-11.42h0s6.93-7.88,3.46-9.11L875.64,897v-6s-2.49-8.33-5.57-12,1.93-3.67,1.93-3.67h7.67s7.86-20.9,17.93-34.45-4.26-4.88-4.26-4.88L886,835s-10.67-10.33-22-11h0l-11,14.33h-3.67s-2-8.79-5.33-8.33-8.33,3-8.33,3-5,24.77-11.33,18.33" transform="translate(-149.49 -72.87)" />
    </g>
    <g id="Ishikawa">
      <path onclick=showDetail("Ishikawa") class="cls-8" d="M867,780.67s5.33-4.33,0-13.67-7,2-7,2l-3.67-4s5.63-8.48,7.67-4,29-4.33,24-12.67l12-6s-1.33-11-8.67-9.67-39,4.33-44.33,10-10,16.67-10,16.67,10,8.33,5,17.67-42,51-46.33,44.5c0,0-2,17.17,5.33,16.83s22.33,8.67,23.33,13,6.67-5,6.67-5,5-8.64,4.67-13.37-.12-29,2.61-29-3.28-4.22,11.39-8.61h0s-2-12,6.33-15,11,.31,11,.31" transform="translate(-149.49 -72.87)" />
    </g>
    <g id="Nagano">
      <path onclick=showDetail("Nagano") class="cls-8" d="M893.33,836s5.67,4.67,4.33,6.67-21.33,28-18,32.67H872s-4.33,4.07,0,8.2l3.64,7.46v6s5.36.33,3.69,3.67.61,4-3.69,6.67c0,0,11.64,9.5,8.33,11.42s-13,8.92-12.31,11.92,4,5.67,4,5.67,12-1.5,12.36,4.42c0,0,11.46-4.42,14.06-2.08s5.27-7,5.27-7L916,931l10.33-16v-9.64s9.33-12,8-14.67c0,0,11.15-4.25,16.39-4.69a6.74,6.74,0,0,1,1.61,0c4,.67,19.21,2.74,19.21,2.74L965,876.67a6.47,6.47,0,0,1,4.33-5.33c4-1.33-.55-10.5-.11-23.42h0S965.67,840,958,838h0s-2.37-7.09,0-8l15.67-6h6s2.12-8.67-3-13.33h0s-1.38-16.7-5.12-14.92S962,804,962,804s-8-4.17-14,6.67c-3.67-6.67,2.78-5,0,0,0,0-7-7.83-10.33-1.92h0s-4.95-14-10-11.08S916,807.33,916,807.33l-8.33,20-8,2.33s-3.16,6.77-6.33,6.33" transform="translate(-149.49 -72.87)" />
    </g>
    <g id="Toyama">
      <path onclick=showDetail("Toyama") class="cls-8" d="M903,785.67s-13,.67-13,5.67-10.33,11-11.33,10.33-6,4.72-17-8c0,0,0-15.69,5.33-13s-9-3.94-11-.31c0,0-9.33,5.42-6.33,15,0,0-12.33,2.1-11.33,6.85s-.06,1.75-.06,1.75a78.41,78.41,0,0,0-2.61,29s6.33-4,8.33-3,5.33,8.33,5.33,8.33H853A137.6,137.6,0,0,1,864,824s19,3.67,22,11l7.33,1s5.67-3,6.33-6.33c0,0,7-2.67,8-2.33s8.33-20,8.33-20L912.67,804l-.33-10.67s-4.8-8.21-9.33-7.67" transform="translate(-149.49 -72.87)" />
    </g>
    <g class="niigata" id="Niigata">
      <path onclick=showDetail("Niigata") class="niigata cls-8" d="M1075.38,682.51a16.71,16.71,0,0,0-1.69.86,19.34,19.34,0,0,0-4.62,3.63s-7.73,14.67-8.4,18-1.57,9.22-1.57,9.22l-7.85,6.12s-11.92,0-12.58,6h-15s-11.4,3.67-14.2,5.33c0,0-7.13,7.67-5.8,9.67s-4.3,14.67-4.3,14.67-3.36,5.5-9.36,5.08c0,0-7.33,2.92-5,6.25,0,0-4.33,1-9.67,1.67S961,778.67,961,778.67s-8.33-1.67-11.33-3.33-16,1.33-17.67,6.33L914.67,783s-7,6-11.67,2.67,9.67,4.67,9.33,7.67.33,10.67.33,10.67l3.33,3.33s13-14,11.67-9.67c0,0,5.67-1.83,10,11.08,0,0,3.67-6.42,10.33,1.92,0,0,7.33-11,14-6.67,0,0,8.33-12.67,13-6.67,0,0,3.67,12,1.67,13.33,0,0,6.33,9,3,13.33H985s12.67-8,15.67-7.67,8.33-10,8.33-10l17.29-2.33-.34-2.33s4.95-.67,0-13.67h0s1.31-6.39,4.51-6.19,3.87-6.81,1.87-9.81h0l27-1s4.16-.13.67-9.33c6.33,4.43,1.21.27,0,0,0,0,14-14.67,15.33-13.33s.73-4-2.14-6-2.65-9.63,0-12.67,5.47-11,5.47-11h0s-1.33,5,11-2.67,2.67-15.67-2.67-15.67h0l-1-7.67s-2.57-9-10.62-10.16" transform="translate(-149.49 -72.87)" />
      <path onclick=showDetail("Niigata") class="niigata cls-8" d="M991.33,682.51s-10.29,9.16-10,12.16c-7,3.67-9.79,3.38-9.79,3.38s-6.88,10.29-3.88,13,6.67-2.33,6.67-2.33,3.49,1-7.42,12.67S981.67,727,981.67,727l7.33-7.67,2.33-3.67,4.33-1.45s3,.84,2-8.69c0,0-4.33-1.53-10,1.47,0,0,12.33-20,7.33-23S991.33,682.51,991.33,682.51Z" transform="translate(-149.49 -72.87)" />
    </g>
    <g id="Chiba">
      <path onclick=showDetail("Chiba") class="cls-9" d="M1038.33,998.67s14-9,15.67-13.67h20s9.33-2,9.33-7.67-1.33-16.33,0-17,19.33-14.69,19.33-14.69h22l.08-4.89-25.25-22-11.75,5.5s-15.88-2.38-18.68-.75-9.13,6.41-9.13,6.41l-3.32,7.34s7.38,2.75,7.72,5.42a2.49,2.49,0,0,1-2.12,3H1057s-19.67,10.11-21,13.07-.33,5.29,3.33,7L1038,979s-1.67,4.33-4,5.67-7,.33-7,.33-2.3,4.67,0,5.67C1027,990.67,1029.33,998,1038.33,998.67Z" transform="translate(-149.49 -72.87)" />
    </g>
    <g id="Kanagawa">
      <path onclick=showDetail("Kanagawa") class="cls-9" d="M982.33,966.33l-4-3.33V952.67s4-5,4-5.67-4.67-6.33-4-8-.4-3,2-4.67c0,0,9-3,10-1.33s3-.5,3-.5,1.88-4.59,2.77-7h0s12.7,10.88,15.56,9.55a62.11,62.11,0,0,0,6-3.33s6,5.33,7.67,3.67h0l7,.67,8.33,9.33-9,.31s-5.93,3.36-4.63,7-.7,6.33,2.3,9.67,1.67,4,1.67,4-1.6,9.67-4,9.33l-2.37-.33s-6.33-2.67-4.67-10.67c0,0-3-8.67-7.67-8.33s-9.33-1.33-11,1S992,958,992,958s-2.33,9.33-3,7.33C989,965.33,986.33,971.33,982.33,966.33Z" transform="translate(-149.49 -72.87)" />
    </g>
    <g id="Gunma">
      <path onclick=showDetail("Gunma") class="cls-9" d="M1026.29,804,1009,806.33s-6.67,10-8.33,10S988.33,822,987.33,824H973.67L958,830s-2.67,6.33,0,8,7.67,2.67,8.67,5.67,3.67,4,3,7.33.33,10.33.33,10.33l-.67,10s-4.67,3.33-4.33,5.33,8.33,11.67,8.33,11.67,1.94.92,6,0,12.17-3.94,12.17-3.94l16.11-14.73,15.67,11.67s9-1.34,11.33,1h0l7.24-1.21L1038,879s-4-4.83-6.5-3.75h0s0-6.08-3.25-7h0l-1.5-3.75,6.5-11s2.16-5.09,0-7.5.75-16.25.75-16.25h0s-.07-10.51,1.5-10.5-11.5-4.92-9.17-7.25,0-8,0-8h0" transform="translate(-149.49 -72.87)" />
    </g>
    <g id="Tokyo">
      <path onclick=showDetail("Tokyo") class="cls-9" d="M994.67,922.33s-8.67-4.39-8.33-7.36-1.33-9.31-1.33-9.31l8-3.67s16.67,6,15.33,8.33c0,0,13.67-2.67,13.67,0a6,6,0,0,0,4.68,2.37c3.28.18,14,0,14,0s9.5-.41,10.59,1.59,7.85-4.6,7.85-4.6l10,13.77s-10.2,5.5-10,8.17c0,0-3.6,11.17-7.85,9.08v-6.08s-8.25-.33-7.92,3.33c0,0-2.67,5-2.67,7.33s-7.33-9.33-8.33-9.33-6-1.67-7-.67-7.67-1.33-7.67-3.67c0,0-4.33,3-6,3.33S991,923.67,994.67,922.33Z" transform="translate(-149.49 -72.87)" />
    </g>
    <g id="Saitama">
      <path onclick=showDetail("Saitama") class="cls-9" d="M1057.5,883.54l-8.75,0-6.84-2.37-7.24,1.21s-7.33-1.41-9.33-1.21l-2,.21-15.67-11.67-14.33,13.87s-12.33,6.46-20,4.8c0,0-2.33,7-1.67,8s0,4.67,2.67,6.33,9,2,10.67,3,7-5.67,8-3.67,11.67,2.67,15.33,8.33c0,0,10.67-1.33,13.67,0s3.67,3.33,9.67,2.33c0,0,18.17-.33,19.58,1.67s3.08-1.33,3.08-1.33l4.76-3.27L1051.25,898l1.5-10,4.75-4.46-8.75,0-6.84-2.37" transform="translate(-149.49 -72.87)" />
    </g>
    <g id="Ibaraki">
      <path onclick=showDetail("Ibaraki") class="cls-9" d="M1124.75,940.75l-9.17-7.5-16.08-14.5s-10,5.5-11.75,5.5-11.25-.5-13-.5-5.25,1.25-7-1.5-5.53-7.5-5.53-7.5l-6.22-10-4.75-6.75s.5-9.75,1.5-10,4.75-4.46,4.75-4.46l10.5-6,17.25-.75,3.25-7.5V865l2.25-1.25v-13l1.75-6.5s3.72-4.51,3.75-6.75,0-12-1.5-12.75,1.55-2.25,1.55-2.25l1.45-1,2.92,9.5s5.51,8.17,9.09,8.42,16.08-1.84,17.91-2.75h0l11,9.33s-2.67,6-4.17,7.5-2.5,6-5.5,6.75-6.75,6.5-5.75,6.5l-.25,6.5s-8.84,3.5-7.42,4.5c0,0-4.83,5.57-3.58,5.79,0,0-5,9.21-3.5,10.71,0,0,2.75,16,4.25,16.75,0,0-1,4.5,0,5.5s0,3.25,0,3.25l2.83,1.5s.83,3,0,4.5l1.17,2,1.51,5.5Z" transform="translate(-149.49 -72.87)" />
    </g>
    <g id="Tochigi">
      <path onclick=showDetail("Tochigi") class="cls-9" d="M1073.5,808.75s-3.25,3.75-5,3.5-9.25,1.25-10,1.75-5.75,0-5.75,0-5.25.5-6.25,1.25-2.25,4-3.25,4-7.5.75-7.75,0S1034,824,1034,824v5.75l-2.5,3.5S1028,843,1033.25,846c0,0,1.5,5.25,0,7.5s-5.5,7-4.5,7.25c0,0-2.5,2.25-2,3.75s-1,3.75,1.5,3.75,3.25,7,3.25,7,7.25,1.75,6.5,3.75c0,0,8.5,5,10.75,4.5s8.75,0,9-1.25c0,0,9.25-4.25,10.25-4.75s17.25-.75,17.25-.75,1.75-6.25,3.25-7.5c0,0-.75-4.25,0-4.25s2.25-1.25,2.25-1.25v-13s2.75-6.5,1.75-6.5c0,0,3.5-4.5,3.75-6.75s-.5-12-1.5-12.75,1.55-2.25,1.55-2.25l1.45-1s-3-5.75-5.75-5.75c0,0-.25-4.5-2.5-5.25a17.24,17.24,0,0,1-3.75-1.75Z" transform="translate(-149.49 -72.87)" />
    </g>
    <g id="Fukushima">
      <path onclick=showDetail("Fukushima") class="cls-10" d="M1076.67,749.67s11.33.33,13.33,1.67,13,8.67,12,9.67,6.5,0,6.5,0a42.58,42.58,0,0,1,4.17-2.33c2.67-1.33,3.33-5.33,3.33-5.33V751l1.33-3.67,2-2.67h8c3.33,0,6.33,6.33,6.33,6.33s3.33,2.78,5.67,2.06,7.33,1.94,7.33,1.94v11l2-1.67,3-1.33,3-1,3.67-1,1.76-1,2.91-.33,2.33-1s0,7.33,1.33,7.33,2,5.67,2,5.67V777s0,7.67-2.33,8-.67,9.33-.67,9.33,1.33,12.33-.33,12.33-.67,3.33-.67,3.33l-1.33,3-1,3-.67,3s-2.15,4.67-1.57,5,0,11.33,0,11.33h-5.43s-2.67,7-5,7.67-10.67,1.67-11,3-11-9.33-11-9.33l-14.33,3-4.83-.33s-6.5-5.67-7.83-8.33a27.85,27.85,0,0,1-2-6s-1-4.33-2-5.67a16.93,16.93,0,0,0-4-3s-1-5-3-5.67a3.29,3.29,0,0,1-2.33-2l-13.67-.67s-3.67,3.33-5.33,3.67a73.34,73.34,0,0,1-7.67.33l-2.67,2-8.33-.33s-4,5-5,4.67-8,1.67-10,.67-9-5.67-8.33-7-1.09-7.67,0-8-.34-2.33-.34-2.33a18.23,18.23,0,0,0,1.72-2.67c.67-1.33-1.72-7.67-1.72-7.67V788s3.05-6,5.72-7,.67-9,.67-9l27-1s1.67-.33,1.67-3.33a21.8,21.8,0,0,0-1-6l5-5.33S1073.33,747,1076.67,749.67Z" transform="translate(-149.49 -72.87)" />
    </g>
    <g id="Miyagi">
      <path onclick=showDetail("Miyagi") class="cls-10" d="M1164.67,759.33s-15,3.33-16.33,6.33,0-10.67,0-10.67-9-1-10-2-3.67,0-3.67,0-2.33-6-5-7-11.33,0-11.33,0,1-7.67,0-8.33,9-2.33,9.67-2,2.33-1.67,2.33-1.67,3-1,4-2.33,4.67-4.67,4-5.67-.67-7.33-.67-7.33,2.6-9,3.8-7.67,9.54-5.67,9.54-8-4.33-5.67-4.33-5.67L1147,694s8.33-7.67,9.33-6.67,2.33-6.67,2.33-6.67l-1.67-2-.67-3-1.67-3v-3l5-1.67,5-2,1.67-2.33,2-1.33h6s4,1.33,3.67,2.67,2.67,4,4.33,6.33a5.3,5.3,0,0,0,4,2.33h6s3.33,1.33,3.33,2.67v3l1.67,1.33s1,6.67,2.33,6,4-2.33,4-2.33L1206,686h2s3.67,3.33,5.33,3.33,3.33-3.33,3.33-3.33,5-3.33,5-4.67A16.78,16.78,0,0,1,1223,677s-1.67-2,2.67-4.67-1.33-1.67,3.67,0,2,.33,3,2.67,2,5.67,2,5.67-.33,6-2,6.33l-5,1s-.33,4.33-1.33,4.33-3.67.33-3.67.33,1,4.67.33,5.67S1220,702,1220,702l-1.67,1.67-1.67,5.33-.33,7v5.67l3,6.33v8.67h-4.67A26.58,26.58,0,0,1,1210,732c-2-2.67-3.67-9-5.33-10s-5-.33-8-1.33-5.67,2.33-7,2-4.33,2.33-4.33,2.33a4.27,4.27,0,0,1-4,1.67,14.25,14.25,0,0,0-5,.33,14.12,14.12,0,0,1-1.63,4.67,35.71,35.71,0,0,0-2,4s-.67,6-.33,7.33-3,3-3,3l-2.67,2v11.33Z" transform="translate(-149.49 -72.87)" />
    </g>
    <g id="Yamagata">
      <path onclick=showDetail("Yamagata") class="cls-10" d="M1109,635s-14.67,30-17.33,34.33-10,.67-12,0-5,2.08-5,2.08-2,6.25-1.33,8.92,9,5,10,7.33,2.33,1.33,2.67,5-1,6.67,1,7.67,6.33.33,7.33,2,2.67,4,1,7-2.67,7-5.67,6.67-9,4.67-11,2.67-1.33,5-1.33,5-2.27,5.33-4.14,6-1.8,12.33,0,12.67,2.14,4.67,2.14,6,12.82,1,15.08,3.33,7.92,4,10.59,7.33,8,1.67,8,1.67,5.33-1.33,6.33-3.33,2-16.67,3.67-19.33,6.33-1.33,6.33-1.33a7.65,7.65,0,0,0,7.14-2.33c2.86-3.33,4.53-6,4.53-8.33a96.48,96.48,0,0,1,1.33-9.67s6.33-9.67,8.67-8.67,4-4.33,4-4.33-3.67-6-3.33-6.67-.67-4.33-.67-4.33,7-6.33,8.33-5.67,4-6,4-6-4-8.33-7-11-9.67-15-8.33-16-13-5.67-13-5.67-7.67-2.67-7-4-6.67-4.67-6.67-4.67Z" transform="translate(-149.49 -72.87)" />
    </g>
    <g id="Iwate">
      <path onclick=showDetail("Iwate") class="cls-10" d="M1204.33,555.33s18.67.33,19.67,0,5-4.67,6.33-4.67H1258s7-1.67,8.33-3.33,8.67,12,8.67,12V570a3.81,3.81,0,0,0-3.33,4v9s4.67,6.67,5.33,9,1,11,0,13.67-2.67,23.33-1.67,27.33-8.33,3.67-7,6.67-1,6-1,6-2.67.67-3,2.33l-.33,1.67-.67,2s0-1.67.67,3-1.67,5.33-3,6-2,7-2.67,9-6,4.67-7.33,2.67-1,4.33-1,4.33h-3.33s-3,.33-4.33-1.33-2,3.33-3.67,3.33A3.6,3.6,0,0,0,1236,680s-5-8.67-10-8.67-4,8.67-4,8.67-3,8-7,8.33-10.33-5-10.67-4-2.33,2-4.33,2-3.33-10.33-5.67-11.33-7.67-1.33-9.33-1.33-11.67-10-10-12-.19-9.67-.19-9.67-1.52-2.67,0-4,3.19-12.33,1.52-13-3.72-7.33-2.2-8.67-.54-4-.54-4,5.07-5.65,5.4-7.65a42.16,42.16,0,0,0,.33-5.33s7.67-6,8.67-8-.33-10.67-.33-10.67,7-5.67,7.67-9S1194,574,1196,574,1199,556.67,1204.33,555.33Z" transform="translate(-149.49 -72.87)" />
    </g>
    <g id="Akita">
      <path onclick=showDetail("Akita") class="cls-10" d="M1140.5,527.5v11s-9.5,14-10,18-14,3-16.5,2.5-5.5,5.5-5.5,5.5v6l3.5,3h8.5v-5h4l5,5c.5.5,3,8.5,3,8.5l1,7.5s1,7.5-1.5,10-7.5,12-7.5,12L1121,618h-4s-4.5,9-6,9,0,9,0,9l4.5,4.5h2.5s17.5,13.5,22.5,12,7.5,16.5,13,16.5,15-6.5,15-6.5,7-1.5,6.5.5,0-10.5,0-10.5,1-9.5,2.47-11.5.5-8-4.5-11,6.78-13,5.14-14.5,5.36-12,8.86-12.5-2-7,0-9,8.5-11,8.5-15,7-22.5,7-22.5,7.5-17,9-17-6.5-5.5-7.5-9-7,3-8.5,6-11-7.5-16.5-3.5-5-5.5-5-5.5-2.51-.57-11.5,0c.83,3.17-13-7.5-16-6.5S1137.33,525,1140.5,527.5Z" transform="translate(-149.49 -72.87)" />
    </g>
    <g id="Aomori">
      <path onclick=showDetail("Aomori") class="cls-10" d="M1200.5,457.5s-7.75.75-7.75,3.5-2.75,0-2.75,0l-1.75-3.5-1.5-2.5h-4.25s-9,6.69-6.75,7.22l-.36,2s2.36,4.75,4.36,6c0,0-4.55,9.75-6.15,10.25L1169,483s-6,7.25-4.5,9.5-11.25,1.5-11.25,1.5l-3.5-3-4.75,3.12s-4.25,8.13-6.5,8.38-7,3-7,3a20.37,20.37,0,0,1,4.5,4.75c1.5,2.5,3.68,15.32,3.68,15.32s3.78-5.22,6.82-4.57,16,6.5,16,6.5H1174s0,7.46,2.5,6.48,4.49-1.81,4.49-1.81h2.18s8.74,5.1,10.54,4.71,5.88-7.59,8.84-7.36l1.46,1s8.74,7.66,7.5,9-7.17,15.83-7.17,15.83H1224l6.33-4.67H1258s7.67-1.75,8.33-3.33S1254,525.25,1254.5,524c0,0-6.25-11.17-4-18.83s15.75-47.42,17-50.17-6.5-2-6.5-2-10.5,6.75-12,2.5-2.5-11.5-6.75-13.25-4-3.48-13.75-2.74-15.5,19.74-15.5,19.74-1,4.75,1.25,7.5,3.5,2.75,3.5,2.75,12.75.25,15.25.5,4.5.5,6.25-.25a16.58,16.58,0,0,1,4-1l2.25.25s1.5-.5,1.5,1.5.5,5.25-.75,6-5.25,3-5.5,6.75a40.78,40.78,0,0,0-3.75,14.08c-.5,7.67-3.5,0-3.5,0S1229,486.75,1222,486s-5.5-1.75-5.5-1.75l-3,1.75s-5,6.75-4.75,9.5c0,0-6.5,1.75-7.5,0s-.25-10.25,1.5-12l-.25-22.75Z" transform="translate(-149.49 -72.87)" />
    </g>
    <g id="Hokkaido">
      <path onclick=showDetail("Hokkaido") class="cls-11" d="M1349.06,93.32s-6.5,1-5,10,5,22.5,5,22.5a25.27,25.27,0,0,0,0,11.5c1.5,6,3.5,17.5,0,20.5s4.22,2.5-1.64,8-3.31,14.5-3.58,14-11.28,9.5-11.28,9.5v28.5s-7,8-11,10.5-14.5,0-14.5,0-11.5,11.5-8,11,6,22,4,27-2.5,13-2.5,13a6.88,6.88,0,0,0-6,0c-3.5,1.5-10,10.5-11.5,12s-6.5,0-6.5,0-7-9.5-11-8.5-17.5-.5-17.5-.5-2-14-13-18.5-14.5-2.5-16.5-1-.5,12,0,15,3.5,12,5.5,11.5.5,7.5.5,7.5l-7,2s-9.49,6-8.49,10-7.5,0-7.5,0-16,4-11,7-19,0-19,0-2.5,20-4,26.5-8,0-8,4.5v10s7,0,8,6.5,9.5,18,13.5,18-24.5,33-21.5,32-.22,10-.22,10,7.22,16.5,12.22,16a13.05,13.05,0,0,0,8-4l16.5-3v-14.5l21-10.5s12.5,16.5,18,17.5,17-3.5,17-3.5l.5-11.5s-7.5-8.5-10.5-7-4.5-27.5-21-26.5-23-21.5-23-21.5,6-15,8-13,11-7.5,11-7.5-.5,4,6,4,11-.5,11-.5,16,27,14.5,31,19.5-14.5,19.5-14.5l32.5-6,18,8.5,7,11.5s16,6.5,21,12,17.5,22.5,23.5,23.5,11,1.5,14.5,5.5,11.5,15,11.5,15,6.5,7,5.5,11,4.5,1,4.5,1v-7l9.5-2s12-41,14.5-38,31-25,31-23.5,41-20,42-11.5,13.5,10.5,13.5,10.5l21.5,1.5v-8l3-1,4,8.5,20.5-5s1-6.5,3.5-6,28.5,2,28.5,2,6.5-5,7.5-10,13.5.5,17-.5,0-9,0-9-12.5-8-18-4.5-6,8.5-12.5,7.5-10-24-10-24,6.5,1.5,10.5,1-15.5-18.5-15.5-18.5l-1-10.5s15-11.5,15.5-18.5,18-18.5,18-18.5,3-3.5,0-7-6-3.5-8,0-14,7-14,11-8.5,0-8.5,0-25.5,12-21,14.5-20-3.49-20-3.49a19.2,19.2,0,0,1-9-8c-3.5-6-5.5-15-7.5-13.5s-3,7.5-5,10-9-1.5-6-2.5,4-6.5,4-6.5-5.5-9.5-8.5-7.5-11,1.5-9,5-12-10-15-7.5,3.5-8-1-10-7-13.5-11.5-13-16-6-15.5-8.5-23-26.5-21.5-29.5-11.5-14.5-10-16-14.5-27-12.5-30.5-13-38-16-38-7.5-1-8.5-3.5-5-13-5-13-7,8-6.5,8-12,2.5-15.5-4-1.5,8.5-1.5,8.5Z" transform="translate(-149.49 -72.87)" />
    </g></svg>

    <p id="test"></p>
    <script language="javascript" type="text/javascript">
	function ajaxFunction(change) {
		var ajaxRequest;
		var counterValue = document.getElementById("counter");
		var initialValue = counterValue.value;
		counter = initialValue;

		ajaxRequest = new XMLHttpRequest();
		ajaxRequest.onreadystatechange = function() {
				var ajaxDisplay = document.getElementById('blogs');
				//var counterValue = document.getElementById("counter");
	//			console.log("earlier: " + counter);
			if (ajaxRequest.readyState == 4) {
				ajaxDisplay.innerHTML = ajaxRequest.responseText;
			}
		}

		if (counter.value != undefined) {
			counter = counter.value;
		}

		if (change > 0 ) { 
			direction = true;
			counter = parseInt(counter) +3;
		} else {
			direction = false;
			counter = parseInt(counter) - 3;
		}

	//	console.log("last: " + counter);
		var queryString = "?counter=" + counter + "&change="+ direction;
	//	console.log(queryString);
		ajaxRequest.open("GET", "ajax.php" + queryString, true);
		ajaxRequest.send(null);
	}
    </script>

    <div id="blogs">
      <p>
        <?php
          $server = "spring-2021.cs.utexas.edu";
          $user = "cs329e_bulko_cchen99";
          $pwd = "Fire_almond_jazz";
          $dbName = "cs329e_bulko_cchen99";
          $mysqli = new mysqli($server,$user,$pwd,$dbName);
          $mysqli->select_db($dbName) or die($mysqli->error);
          $counter = 0;
          $blogposts = $mysqli->query("SELECT * FROM blogs ORDER BY id DESC"); 
          while(($row = $blogposts->fetch_array(MYSQLI_ASSOC)) && $counter <=2){
            echo("<div id='blog$counter'><h4>$row[title]</h4><h5>Author: $row[author]</h5><p>$row[body]</p></div>");

	    //echo "$counter";
            $counter++;
          }
	  $counter--; //idx = 2
	  echo "<input id='counter' type='text' hidden value = '$counter'>"; // NEEDED

          echo "<input type=\"button\" value=\"Previous Page\" onclick='ajaxFunction(-3)'>";
          echo "<input type=\"button\" value=\"Next Page\" onclick='ajaxFunction(3)'>";
          
        ?>
      </p>

      <p id="ajaxDiv">
      </p>
    </div>
  </div>
  <!-- Content -->
  </p>
  <p>
    <!-- Content -->
  </p>
  </div>

  </div>
  <div id="footer">
    <p>Copyright © 3/09/2021 Catherine Chen, Wyatt Horton, Rachel Kim, Jack Spicer</p>
  </div>
</body>

</html>
