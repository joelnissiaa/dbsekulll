<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>SMK Negeri 10 Semarang</title>
  <meta name="description" content="" />
  <meta name="keywords" content="" />

  <!-- Favicons -->
  <link href="assets/img/LOGOrpl.png" rel="icon" />
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect" />
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap"
    rel="stylesheet" />

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
  <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/your-kit-code.js" crossorigin="anonymous"></script>

  <!-- Main CSS File -->
  <!-- <link href="assets/css/main.css" rel="stylesheet" /> -->

  <style>
    /**
* Template Name: HeroBiz
* Template URL: https://bootstrapmade.com/herobiz-bootstrap-business-template/
* Updated: Aug 07 2024 with Bootstrap v5.3.3
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/

    /* --------------------------------------------------------------
# Font & Color Variables
# Help: https://bootstrapmade.com/color-system/
--------------------------------------------------------------*/
    /* Fonts */
    :root {
      --default-font: "Roboto", system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
      --heading-font: "Source Sans Pro", sans-serif;
      --nav-font: "Poppins", sans-serif;
    }

    /* Global Colors - The following color variables are used throughout the website. Updating them here will change the color scheme of the entire website */
    :root {
      --background-color: #ffffff;
      /* Background color for the entire website, including individual sections */
      --default-color: #1a1f24;
      /* Default color used for the majority of the text content across the entire website */
      --heading-color: #485664;
      /* Color for headings, subheadings and title throughout the website */
      --accent-color: #20664f;
      /* Accent color that represents your brand on the website. It's used for buttons, links, and other elements that need to stand out */
      --surface-color: #ffffff;
      /* The surface color is used as a background of boxed elements within sections, such as cards, icon boxes, or other elements that require a visual separation from the global background. */
      --contrast-color: #ffffff;
      /* Contrast color for text, ensuring readability against backgrounds of accent, heading, or default colors. */
    }

    /* Nav Menu Colors - The following color variables are used specifically for the navigation menu. They are separate from the global colors to allow for more customization options */
    :root {
      --nav-color: #485664;
      /* The default color of the main navmenu links */
      --nav-hover-color: #20664f;
      /* Applied to main navmenu links when they are hovered over or active */
      --nav-mobile-background-color: #ffffff;
      /* Used as the background color for mobile navigation menu */
      --nav-dropdown-background-color: #ffffff;
      /* Used as the background color for dropdown items that appear when hovering over primary navigation items */
      --nav-dropdown-color: #485664;
      /* Used for navigation links of the dropdown items in the navigation menu. */
      --nav-dropdown-hover-color: #0ea2bd;
      /* Similar to --nav-hover-color, this color is applied to dropdown navigation links when they are hovered over. */
    }

    /* Color Presets - These classes override global colors when applied to any section or element, providing reuse of the sam color scheme. */

    .light-background {
      --background-color: #eef0f2;
      --surface-color: #ffffff;
    }

    .dark-background {
      --background-color: #3a4753;
      --default-color: #ffffff;
      --heading-color: #ffffff;
      --surface-color: #4f6171;
      --contrast-color: #ffffff;
    }

    /* Smooth scroll */
    :root {
      scroll-behavior: smooth;
    }

    /*--------------------------------------------------------------
# General Styling & Shared Classes
--------------------------------------------------------------*/
    body {
      color: var(--default-color);
      background-color: var(--background-color);
      font-family: var(--default-font);
    }

    a {
      color: var(--accent-color);
      text-decoration: none;
      transition: 0.3s;
    }

    a:hover {
      color: color-mix(in srgb, var(--accent-color), transparent 25%);
      text-decoration: none;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      color: var(--heading-color);
      font-family: var(--heading-font);
    }

    /* Pulsating Play Button
------------------------------*/
    .pulsating-play-btn {
      width: 94px;
      height: 94px;
      background: radial-gradient(var(--accent-color) 50%, color-mix(in srgb, var(--accent-color), transparent 75%) 52%);
      border-radius: 50%;
      display: block;
      position: relative;
      overflow: hidden;
    }

    .pulsating-play-btn:before {
      content: "";
      position: absolute;
      width: 120px;
      height: 120px;
      animation-delay: 0s;
      animation: pulsate-play-btn 2s;
      animation-direction: forwards;
      animation-iteration-count: infinite;
      animation-timing-function: steps;
      opacity: 1;
      border-radius: 50%;
      border: 5px solid color-mix(in srgb, var(--accent-color), transparent 30%);
      top: -15%;
      left: -15%;
      background: rgba(198, 16, 0, 0);
    }

    .pulsating-play-btn:after {
      content: "";
      position: absolute;
      left: 50%;
      top: 50%;
      transform: translateX(-40%) translateY(-50%);
      width: 0;
      height: 0;
      border-top: 10px solid transparent;
      border-bottom: 10px solid transparent;
      border-left: 15px solid #fff;
      z-index: 100;
      transition: all 400ms cubic-bezier(0.55, 0.055, 0.675, 0.19);
    }

    .pulsating-play-btn:hover:before {
      content: "";
      position: absolute;
      left: 50%;
      top: 50%;
      transform: translateX(-40%) translateY(-50%);
      width: 0;
      height: 0;
      border: none;
      border-top: 10px solid transparent;
      border-bottom: 10px solid transparent;
      border-left: 15px solid #fff;
      z-index: 200;
      animation: none;
      border-radius: 0;
    }

    .pulsating-play-btn:hover:after {
      border-left: 15px solid var(--accent-color);
      transform: scale(20);
    }

    @keyframes pulsate-play-btn {
      0% {
        transform: scale(0.6, 0.6);
        opacity: 1;
      }

      100% {
        transform: scale(1, 1);
        opacity: 0;
      }
    }

    /* PHP Email Form Messages
------------------------------*/
    .php-email-form .error-message {
      display: none;
      background: #df1529;
      color: #ffffff;
      text-align: left;
      padding: 15px;
      margin-bottom: 24px;
      font-weight: 600;
    }

    .php-email-form .sent-message {
      display: none;
      color: #ffffff;
      background: #059652;
      text-align: center;
      padding: 15px;
      margin-bottom: 24px;
      font-weight: 600;
    }

    .php-email-form .loading {
      display: none;
      background: var(--surface-color);
      text-align: center;
      padding: 15px;
      margin-bottom: 24px;
    }

    .php-email-form .loading:before {
      content: "";
      display: inline-block;
      border-radius: 50%;
      width: 24px;
      height: 24px;
      margin: 0 10px -6px 0;
      border: 3px solid var(--accent-color);
      border-top-color: var(--surface-color);
      animation: php-email-form-loading 1s linear infinite;
    }

    @keyframes php-email-form-loading {
      0% {
        transform: rotate(0deg);
      }

      100% {
        transform: rotate(360deg);
      }
    }

    /*--------------------------------------------------------------
# Global Header
--------------------------------------------------------------*/
    .header {
      color: var(--default-color);
      background-color: var(--background-color);
      padding: 20px 0;
      transition: all 0.5s;
      z-index: 997;
    }

    .header .logo {
      line-height: 1;
    }

    .header .logo img {
      max-height: 36px;
      margin-right: 8px;
    }

    .header .logo h1 {
      font-size: 32px;
      font-weight: 300;
      margin: 0;
      color: var(--heading-color);
    }

    .header .logo span {
      color: var(--accent-color);
      font-weight: 400;
      font-size: 34px;
      margin-left: 2px;
    }

    .header .btn-getstarted,
    .header .btn-getstarted:focus {
      color: var(--contrast-color);
      background: var(--accent-color);
      font-size: 14px;
      padding: 8px 26px;
      margin: 0;
      border-radius: 4px;
      transition: 0.3s;
    }

    .header .btn-getstarted:hover,
    .header .btn-getstarted:focus:hover {
      color: var(--contrast-color);
      background: color-mix(in srgb, var(--accent-color), transparent 15%);
    }

    @media (max-width: 1200px) {
      .header .logo {
        order: 1;
      }

      .header .btn-getstarted {
        order: 2;
        margin: 0 15px 0 0;
        padding: 6px 20px;
      }

      .header .navmenu {
        order: 3;
      }
    }

    .scrolled .header {
      box-shadow: 0px 0 18px rgba(0, 0, 0, 0.1);
    }

    /*--------------------------------------------------------------
# Navigation Menu
--------------------------------------------------------------*/
    /* Desktop Navigation */
    @media (min-width: 1200px) {
      .navmenu {
        padding: 0;
      }

      .navmenu ul {
        margin: 0;
        padding: 0;
        display: flex;
        list-style: none;
        align-items: center;
      }

      .navmenu li {
        position: relative;
      }

      .navmenu>ul>li {
        white-space: nowrap;
        padding: 15px 14px;
      }

      .navmenu>ul>li:last-child {
        padding-right: 0;
      }

      .navmenu a,
      .navmenu a:focus {
        color: var(--nav-color);
        font-size: 15px;
        padding: 0 2px;
        font-family: var(--nav-font);
        font-weight: 400;
        display: flex;
        align-items: center;
        justify-content: space-between;
        white-space: nowrap;
        transition: 0.3s;
        position: relative;
      }

      .navmenu a i,
      .navmenu a:focus i {
        font-size: 12px;
        line-height: 0;
        margin-left: 5px;
        transition: 0.3s;
      }

      .navmenu>ul>li>a:before {
        content: "";
        position: absolute;
        width: 100%;
        height: 2px;
        bottom: -6px;
        left: 0;
        background-color: var(--nav-hover-color);
        visibility: hidden;
        width: 0px;
        transition: all 0.3s ease-in-out 0s;
      }

      .navmenu a:hover:before,
      .navmenu li:hover>a:before,
      .navmenu .active:before {
        visibility: visible;
        width: 100%;
      }

      .navmenu li:hover>a,
      .navmenu .active,
      .navmenu .active:focus {
        color: var(--nav-hover-color);
      }

      .navmenu .dropdown ul {
        margin: 0;
        padding: 10px 0;
        background: var(--nav-dropdown-background-color);
        display: block;
        position: absolute;
        visibility: hidden;
        left: 14px;
        top: 130%;
        opacity: 0;
        transition: 0.3s;
        border-radius: 4px;
        z-index: 99;
        box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.1);
      }

      .navmenu .dropdown ul li {
        min-width: 200px;
      }

      .navmenu .dropdown ul a {
        padding: 10px 20px;
        font-size: 15px;
        text-transform: none;
        color: var(--nav-dropdown-color);
      }

      .navmenu .dropdown ul a i {
        font-size: 12px;
      }

      .navmenu .dropdown ul a:hover,
      .navmenu .dropdown ul .active:hover,
      .navmenu .dropdown ul li:hover>a {
        color: var(--nav-dropdown-hover-color);
      }

      .navmenu .dropdown:hover>ul {
        opacity: 1;
        top: 100%;
        visibility: visible;
      }

      .navmenu .dropdown .dropdown ul {
        top: 0;
        left: -90%;
        visibility: hidden;
      }

      .navmenu .dropdown .dropdown:hover>ul {
        opacity: 1;
        top: 0;
        left: -100%;
        visibility: visible;
      }
    }

    /* Mobile Navigation */
    @media (max-width: 1199px) {
      .mobile-nav-toggle {
        color: var(--nav-color);
        font-size: 28px;
        line-height: 0;
        margin-right: 10px;
        cursor: pointer;
        transition: color 0.3s;
      }

      .navmenu {
        padding: 0;
        z-index: 9997;
      }

      .navmenu ul {
        display: none;
        list-style: none;
        position: absolute;
        inset: 60px 20px 20px 20px;
        padding: 10px 0;
        margin: 0;
        border-radius: 6px;
        background-color: var(--nav-mobile-background-color);
        border: 1px solid color-mix(in srgb, var(--default-color), transparent 90%);
        box-shadow: none;
        overflow-y: auto;
        transition: 0.3s;
        z-index: 9998;
      }

      .navmenu a,
      .navmenu a:focus {
        color: var(--nav-dropdown-color);
        padding: 10px 20px;
        font-family: var(--nav-font);
        font-size: 17px;
        font-weight: 500;
        display: flex;
        align-items: center;
        justify-content: space-between;
        white-space: nowrap;
        transition: 0.3s;
      }

      .navmenu a i,
      .navmenu a:focus i {
        font-size: 12px;
        line-height: 0;
        margin-left: 5px;
        width: 30px;
        height: 30px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        transition: 0.3s;
        background-color: color-mix(in srgb, var(--accent-color), transparent 90%);
      }

      .navmenu a i:hover,
      .navmenu a:focus i:hover {
        background-color: var(--accent-color);
        color: var(--contrast-color);
      }

      .navmenu a:hover,
      .navmenu .active,
      .navmenu .active:focus {
        color: var(--nav-dropdown-hover-color);
      }

      .navmenu .active i,
      .navmenu .active:focus i {
        background-color: var(--accent-color);
        color: var(--contrast-color);
        transform: rotate(180deg);
      }

      .navmenu .dropdown ul {
        position: static;
        display: none;
        z-index: 99;
        padding: 10px 0;
        margin: 10px 20px;
        background-color: var(--nav-dropdown-background-color);
        transition: all 0.5s ease-in-out;
      }

      .navmenu .dropdown ul ul {
        background-color: rgba(33, 37, 41, 0.1);
      }

      .navmenu .dropdown>.dropdown-active {
        display: block;
        background-color: rgba(33, 37, 41, 0.03);
      }

      .mobile-nav-active {
        overflow: hidden;
      }

      .mobile-nav-active .mobile-nav-toggle {
        color: #fff;
        position: absolute;
        font-size: 32px;
        top: 15px;
        right: 15px;
        margin-right: 0;
        z-index: 9999;
      }

      .mobile-nav-active .navmenu {
        position: fixed;
        overflow: hidden;
        inset: 0;
        background: rgba(33, 37, 41, 0.8);
        transition: 0.3s;
      }

      .mobile-nav-active .navmenu>ul {
        display: block;
      }
    }

    /*--------------------------------------------------------------
# Global Footer
--------------------------------------------------------------*/
    .footer {
      color: var(--default-color);
      background-color: var(--background-color);
      font-size: 14px;
      position: relative;
    }

    .footer .footer-top {
      background-color: color-mix(in srgb, var(--background-color), white 5%);
      padding-top: 50px;
    }

    .footer .footer-about .logo {
      line-height: 1;
      margin-bottom: 25px;
    }

    .footer .footer-about .logo img {
      max-height: 40px;
      margin-right: 6px;
    }

    .footer .footer-about .logo span {
      color: var(--heading-color);
      font-family: var(--heading-font);
      font-size: 26px;
      font-weight: 700;
      letter-spacing: 1px;
    }

    .footer .footer-about p {
      font-size: 14px;
      font-family: var(--heading-font);
    }

    .footer h4 {
      font-size: 16px;
      font-weight: 600;
      position: relative;
      padding-bottom: 12px;
      margin-bottom: 15px;
    }

    .footer h4::after {
      content: "";
      position: absolute;
      display: block;
      width: 20px;
      height: 2px;
      background: var(--accent-color);
      bottom: 0;
      left: 0;
    }

    .footer .footer-links {
      margin-bottom: 30px;
    }

    .footer .footer-links ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .footer .footer-links ul i {
      padding-right: 2px;
      font-size: 12px;
      line-height: 0;
    }

    .footer .footer-links ul li {
      padding: 10px 0;
      display: flex;
      align-items: center;
    }

    .footer .footer-links ul li:first-child {
      padding-top: 0;
    }

    .footer .footer-links ul a {
      color: color-mix(in srgb, var(--default-color), transparent 30%);
      display: inline-block;
      line-height: 1;
    }

    .footer .footer-links ul a:hover {
      color: var(--accent-color);
    }

    .footer .footer-contact p {
      margin-bottom: 5px;
    }

    .footer .copyright {
      padding: 30px 0;
    }

    .footer .copyright p {
      margin-bottom: 0;
    }

    .footer .credits {
      margin-top: 5px;
      font-size: 13px;
      color: #eef0f2;
    }

    .footer .social-links a {
      font-size: 18px;
      display: inline-block;
      background: color-mix(in srgb, var(--default-color), transparent 90%);
      color: var(--contrast-color);
      line-height: 1;
      padding: 8px 0;
      margin-right: 4px;
      border-radius: 4px;
      text-align: center;
      width: 36px;
      height: 36px;
      transition: 0.3s;
    }

    .footer .social-links a:hover {
      background: var(--accent-color);
      text-decoration: none;
    }

    /*--------------------------------------------------------------
# Preloader
--------------------------------------------------------------*/
    #preloader {
      position: fixed;
      inset: 0;
      z-index: 9999;
      overflow: hidden;
      background-color: var(--background-color);
      transition: all 0.6s ease-out;
      width: 100%;
      height: 100vh;
    }

    #preloader:before,
    #preloader:after {
      content: "";
      position: absolute;
      border: 4px solid var(--accent-color);
      border-radius: 50%;
      animation: animate-preloader 2s cubic-bezier(0, 0.2, 0.8, 1) infinite;
    }

    #preloader:after {
      animation-delay: -0.5s;
    }

    @keyframes animate-preloader {
      0% {
        width: 10px;
        height: 10px;
        top: calc(50% - 5px);
        left: calc(50% - 5px);
        opacity: 1;
      }

      100% {
        width: 72px;
        height: 72px;
        top: calc(50% - 36px);
        left: calc(50% - 36px);
        opacity: 0;
      }
    }

    /*--------------------------------------------------------------
# Scroll Top Button
--------------------------------------------------------------*/
    .scroll-top {
      position: fixed;
      visibility: hidden;
      opacity: 0;
      right: 15px;
      bottom: 15px;
      z-index: 99999;
      background-color: var(--accent-color);
      width: 40px;
      height: 40px;
      border-radius: 4px;
      transition: all 0.4s;
    }

    .scroll-top i {
      font-size: 24px;
      color: var(--contrast-color);
      line-height: 0;
    }

    .scroll-top:hover {
      background-color: color-mix(in srgb, var(--accent-color), transparent 20%);
      color: var(--contrast-color);
    }

    .scroll-top.active {
      visibility: visible;
      opacity: 1;
    }

    /*--------------------------------------------------------------
# Disable aos animation delay on mobile devices
--------------------------------------------------------------*/
    @media screen and (max-width: 768px) {
      [data-aos-delay] {
        transition-delay: 0 !important;
      }
    }

    /*--------------------------------------------------------------
# Global Page Titles & Breadcrumbs
--------------------------------------------------------------*/
    .page-title {
      --background-color: color-mix(in srgb, var(--default-color), transparent 96%);
      color: var(--default-color);
      background-color: var(--background-color);
      padding: 25px 0;
      position: relative;
    }

    .page-title h1 {
      font-size: 28px;
      font-weight: 300;
    }

    .page-title .breadcrumbs ol {
      display: flex;
      flex-wrap: wrap;
      list-style: none;
      padding: 0;
      margin: 0;
      font-size: 14px;
    }

    .page-title .breadcrumbs ol li+li {
      padding-left: 10px;
    }

    .page-title .breadcrumbs ol li+li::before {
      content: "/";
      display: inline-block;
      padding-right: 10px;
      color: color-mix(in srgb, var(--default-color), transparent 70%);
    }

    /*--------------------------------------------------------------
# Global Sections
--------------------------------------------------------------*/
    section,
    .section {
      color: var(--default-color);
      background-color: var(--background-color);
      padding: 60px 0;
      scroll-margin-top: 100px;
      overflow: clip;
    }

    @media (max-width: 1199px) {

      section,
      .section {
        scroll-margin-top: 66px;
      }
    }

    /*--------------------------------------------------------------
# Global Section Titles
--------------------------------------------------------------*/
    .section-title {
      text-align: center;
      padding-bottom: 60px;
      position: relative;
    }

    .section-title h2 {
      font-size: 48px;
      font-weight: 300;
      margin-bottom: 15px;
    }

    .section-title p {
      margin-bottom: 0;
    }

    /*--------------------------------------------------------------
# Hero Section
--------------------------------------------------------------*/
    .hero {
      width: 100%;
      min-height: 50vh;
      position: relative;
      padding: 120px 0 60px 0;
      display: flex;
      align-items: center;
      background: url("../img/hero-bg.png") center center;
      background-size: cover;
    }

    .hero h1 {
      margin: 0 0 10px 0;
      font-size: 48px;
      font-weight: 300;
    }

    .hero h1 span {
      color: var(--accent-color);
    }

    .hero p {
      color: color-mix(in srgb, var(--default-color), transparent 30%);
      margin: 5px 0 30px 0;
      font-size: 20px;
      font-weight: 400;
    }

    .hero .btn-get-started {
      color: var(--contrast-color);
      background: var(--accent-color);
      font-family: var(--heading-font);
      font-weight: 400;
      font-size: 15px;
      letter-spacing: 1px;
      display: inline-block;
      padding: 10px 28px;
      border-radius: 4px;
      transition: 0.5s;
    }

    .hero .btn-get-started:hover {
      color: var(--contrast-color);
      background: color-mix(in srgb, var(--accent-color), transparent 15%);
    }

    .hero .btn-watch-video {
      font-size: 16px;
      transition: 0.5s;
      margin-left: 25px;
      color: var(--default-color);
      font-weight: 500;
    }

    .hero .btn-watch-video i {
      color: var(--accent-color);
      font-size: 32px;
      transition: 0.3s;
      line-height: 0;
      margin-right: 8px;
    }

    .hero .btn-watch-video:hover {
      color: var(--accent-color);
    }

    .hero .btn-watch-video:hover i {
      color: color-mix(in srgb, var(--accent-color), transparent 15%);
    }

    .hero .animated {
      margin-bottom: 60px;
      animation: up-down 2s ease-in-out infinite alternate-reverse both;
    }

    @media (min-width: 992px) {
      .hero .animated {
        max-width: 45%;
      }
    }

    @media (max-width: 991px) {
      .hero .animated {
        max-width: 60%;
      }
    }

    @media (max-width: 575px) {
      .hero .animated {
        max-width: 80%;
      }
    }

    @media (max-width: 640px) {
      .hero h1 {
        font-size: 28px;
        line-height: 36px;
      }

      .hero p {
        font-size: 18px;
        line-height: 24px;
        margin-bottom: 30px;
      }

      .hero .btn-get-started,
      .hero .btn-watch-video {
        font-size: 13px;
      }
    }

    @keyframes up-down {
      0% {
        transform: translateY(10px);
      }

      100% {
        transform: translateY(-10px);
      }
    }

    /*--------------------------------------------------------------
# Featured Services Section
--------------------------------------------------------------*/
    .featured-services .service-item {
      padding: 50px 30px;
      transition: all ease-in-out 0.4s;
      height: 100%;
    }

    .featured-services .service-item .icon {
      margin-bottom: 10px;
    }

    .featured-services .service-item .icon i {
      color: var(--accent-color);
      font-size: 36px;
      transition: 0.3s;
    }

    .featured-services .service-item h4 {
      font-weight: 700;
      margin-bottom: 15px;
      font-size: 20px;
    }

    .featured-services .service-item h4 a {
      color: var(--heading-color);
      transition: ease-in-out 0.3s;
    }

    .featured-services .service-item p {
      line-height: 24px;
      font-size: 14px;
      margin-bottom: 0;
    }

    .featured-services .service-item:hover {
      transform: translateY(-10px);
      background-color: var(--surface-color);
      box-shadow: 0px 5px 90px 0px rgba(0, 0, 0, 0.1);
    }

    .featured-services .service-item:hover h4 a {
      color: var(--accent-color);
    }

    /*--------------------------------------------------------------
# About Section
--------------------------------------------------------------*/
    .about .about-img {
      position: relative;
      margin: 60px 0 0 60px;
    }

    .about .about-img:before {
      position: absolute;
      inset: -60px 0 0 -60px;
      content: "";
      background: url("../img/about-bg.png") top left;
      background-repeat: no-repeat;
      z-index: 1;
    }

    .about .about-img img {
      position: relative;
      z-index: 2;
    }

    @media (max-width: 575px) {
      .about .about-img {
        margin: 30px 0 0 30px;
      }

      .about .about-img:before {
        inset: -30px 0 0 -30px;
      }
    }

    .about h3 {
      font-weight: 300;
      font-size: 32px;
      margin-bottom: 20px;
    }

    @media (max-width: 768px) {
      .about h3 {
        font-size: 28px;
      }
    }

    .about .nav-pills {
      border-bottom: 1px solid color-mix(in srgb, var(--default-color), transparent 85%);
    }

    .about .nav-pills li+li {
      margin-left: 40px;
    }

    .about .nav-link {
      background: none;
      font-size: 18px;
      font-weight: 400;
      color: var(--default-color);
      padding: 12px 0;
      margin-bottom: -2px;
      border-radius: 0;
    }

    .about .nav-link.active {
      color: var(--accent-color);
      background: none;
      border-bottom: 3px solid var(--accent-color);
    }

    @media (max-width: 575px) {
      .about .nav-link {
        font-size: 16px;
      }
    }

    .about .tab-content h4 {
      font-size: 18px;
      margin: 0;
      font-weight: 700;
      color: var(--default-color);
    }

    .about .tab-content i {
      font-size: 22px;
      line-height: 0;
      margin-right: 8px;
      color: var(--accent-color);
    }

    /*--------------------------------------------------------------
# Clients Section
--------------------------------------------------------------*/
    .clients {
      padding: 20px 0;
    }

    .clients .client-logo {
      display: flex;
      justify-content: center;
      align-items: center;
      overflow: hidden;
    }

    .clients .client-logo img {
      padding: 20px 40px;
      max-width: 90%;
      transition: 0.3s;
      opacity: 0.5;
      filter: grayscale(100);
    }

    .clients .client-logo img:hover {
      filter: none;
      opacity: 1;
    }

    @media (max-width: 640px) {
      .clients .client-logo img {
        padding: 20px;
      }
    }

    /*--------------------------------------------------------------
# Call To Action Section
--------------------------------------------------------------*/
    .call-to-action {
      padding: 0;
    }

    .call-to-action .container {
      padding: 80px;
      background: color-mix(in srgb, var(--default-color), transparent 96%);
      border-radius: 15px;
    }

    @media (max-width: 992px) {
      .call-to-action .container {
        padding: 60px;
      }
    }

    .call-to-action .content h3 {
      font-size: 48px;
      font-weight: 700;
    }

    .call-to-action .content h3 em {
      font-style: normal;
      position: relative;
      z-index: 1;
    }

    .call-to-action .content h3 em:after {
      content: "";
      position: absolute;
      left: 0;
      right: 0;
      bottom: 10px;
      height: 10px;
      background: color-mix(in srgb, var(--accent-color), transparent 30%);
      z-index: -1;
    }

    .call-to-action .content p {
      color: color-mix(in srgb, var(--default-color), transparent 20%);
      font-weight: 400;
      font-size: 18px;
    }

    .call-to-action .content .cta-btn {
      color: var(--contrast-color);
      font-weight: 500;
      font-size: 16px;
      display: inline-block;
      padding: 12px 40px;
      border-radius: 5px;
      transition: 0.5s;
      margin-top: 10px;
      background: var(--accent-color);
    }

    .call-to-action .content .cta-btn:hover {
      background: color-mix(in srgb, var(--accent-color) 90%, black 15%);
    }

    .call-to-action .img {
      position: relative;
    }

    .call-to-action .img:before {
      content: "";
      position: absolute;
      inset: 0;
      background: color-mix(in srgb, var(--contrast-color), transparent 20%);
      border-radius: 15px;
      transform: rotate(6deg);
      z-index: 2;
    }

    .call-to-action .img:after {
      content: "";
      position: absolute;
      inset: 0;
      background: color-mix(in srgb, var(--default-color), transparent 95%);
      border-radius: 15px;
      transform: rotate(12deg);
      z-index: 1;
    }

    .call-to-action .img img {
      position: relative;
      z-index: 3;
      border-radius: 15px;
      z-index: 3;
    }

    /*--------------------------------------------------------------
# Onfocus Section
--------------------------------------------------------------*/
    .onfocus {
      padding: 0;
    }

    .onfocus .video-play {
      min-height: 400px;
      background: linear-gradient(color-mix(in srgb, var(--background-color), transparent 90%), color-mix(in srgb, var(--background-color), transparent 75%)), url("../img/joel.jpg") center center;
      background-size: cover;
    }

    .onfocus .content {
      background: linear-gradient(color-mix(in srgb, var(--background-color), transparent 90%), color-mix(in srgb, var(--background-color), transparent 75%)), url("../img/SMKN10.jpeg") center center;
      background-size: cover;
      padding: 40px;
    }

    @media (min-width: 768px) {
      .onfocus .content {
        padding: 80px;
      }
    }

    .onfocus .content h3 {
      font-weight: 600;
      font-size: 32px;
    }

    .onfocus .content ul {
      list-style: none;
      padding: 0;
    }

    .onfocus .content ul li {
      padding-bottom: 10px;
    }

    .onfocus .content ul i {
      font-size: 20px;
      padding-right: 4px;
      color: var(--accent-color);
    }

    .onfocus .content p:last-child {
      margin-bottom: 0;
    }

    .onfocus .content .read-more {
      font-weight: 500;
      font-size: 16px;
      letter-spacing: 1px;
      padding: 12px 24px;
      border-radius: 5px;
      transition: 0.3s;
      display: -nline-flex;
      align-items: center;
      justify-content: center;
      color: var(--contrast-color);
      background: var(--accent-color);
    }

    .onfocus .content .read-more i {
      font-size: 18px;
      margin-left: 5px;
      line-height: 0;
      transition: 0.3s;
    }

    .onfocus .content .read-more:hover {
      background: color-mix(in srgb, var(--accent-color) 90%, black 15%);
      padding-right: 19px;
    }

    .onfocus .content .read-more:hover i {
      margin-left: 10px;
    }

    .onfocus .pulsating-play-btn {
      position: absolute;
      left: calc(50% - 47px);
      top: calc(50% - 47px);
    }

    /*--------------------------------------------------------------
# Features Section
--------------------------------------------------------------*/
    .features .nav-tabs {
      border: 0;
    }

    .features .nav-link {
      background-color: var(--surface-color);
      color: var(--color-secondary);
      border: 0;
      padding: 25px 20px;
      box-shadow: 5px 5px 25px rgba(0, 0, 0, 0.1);
      border-radius: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      transition: 0s;
      cursor: pointer;
      height: 100%;
    }

    .features .nav-link i {
      font-size: 32px;
      line-height: 0;
    }

    .features .nav-link h4 {
      font-size: 20px;
      font-weight: 600;
      margin: 10px 0 0 0;
    }

    .features .nav-link:hover {
      color: var(--accent-color);
    }

    .features .nav-link:hover,
    .features .nav-link.active {
      transition: 0.3s;
      background: var(--accent-color);
      color: var(--contrast-color) !important;
      border-color: var(--accent-color);
    }

    .features .nav-link:hover h4,
    .features .nav-link.active h4 {
      color: var(--contrast-color);
    }

    .features .nav-link:hover i,
    .features .nav-link.active i {
      color: var(--contrast-color) !important;
    }

    .features .tab-content {
      margin-top: 30px;
    }

    .features .tab-pane.active {
      animation: fadeIn 0.5s ease-out;
    }

    .features .tab-pane h3 {
      font-weight: 600;
      font-size: 28px;
    }

    .features .tab-pane ul {
      list-style: none;
      padding: 0;
    }

    .features .tab-pane ul li {
      padding-bottom: 10px;
    }

    .features .tab-pane ul i {
      font-size: 24px;
      margin-right: 4px;
      color: var(--accent-color);
    }

    .features .tab-pane p:last-child {
      margin-bottom: 0;
    }

    /*--------------------------------------------------------------
# Services Section
--------------------------------------------------------------*/
    .services .img {
      border-radius: 8px;
      overflow: hidden;
    }

    .services .img img {
      transition: 0.6s;
    }

    .services .details {
      background: color-mix(in srgb, var(--surface-color), transparent 5%);
      padding: 50px 30px;
      margin: -100px 30px 0 30px;
      transition: all ease-in-out 0.3s;
      position: relative;
      text-align: center;
      border-radius: 8px;
      box-shadow: 0px 0 25px rgba(0, 0, 0, 0.1);
    }

    .services .details .icon {
      margin: 0;
      width: 72px;
      height: 72px;
      background: var(--accent-color);
      color: var(--contrast-color);
      border: 6px solid var(--contrast-color);
      border-radius: 50px;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 20px;
      font-size: 28px;
      transition: ease-in-out 0.3s;
      position: absolute;
      top: -36px;
      left: calc(50% - 36px);
    }

    .services .details h3 {
      font-weight: 700;
      margin: 10px 0 15px 0;
      font-size: 22px;
      transition: ease-in-out 0.3s;
    }

    .services .details p {
      color: color-mix(in srgb, var(--default-color), transparent 10%);
      line-height: 24px;
      font-size: 14px;
      margin-bottom: 0;
    }

    .services .service-item:hover .details h3 {
      color: var(--accent-color);
    }

    .services .service-item:hover .details .icon {
      background: var(--surface-color);
      border: 2px solid var(--accent-color);
    }

    .services .service-item:hover .details .icon i {
      color: var(--accent-color);
    }

    .services .service-item:hover .img img {
      transform: scale(1.2);
    }

    /*--------------------------------------------------------------
# Testimonials Section
--------------------------------------------------------------*/
    .testimonials {
      padding: 80px 0;
      position: relative;
    }

    .testimonials:before {
      content: "";
      background: color-mix(in srgb, var(--background-color), transparent 30%);
      position: absolute;
      inset: 0;
      z-index: 2;
    }

    .testimonials .testimonials-bg {
      position: absolute;
      inset: 0;
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
      z-index: 1;
    }

    .testimonials .container {
      position: relative;
      z-index: 3;
    }

    .testimonials .testimonials-carousel,
    .testimonials .testimonials-slider {
      overflow: hidden;
    }

    .testimonials .testimonial-item {
      text-align: center;
    }

    .testimonials .testimonial-item .testimonial-img {
      width: 100px;
      border-radius: 50%;
      border: 6px solid color-mix(in srgb, var(--default-color), transparent 85%);
      margin: 0 auto;
    }

    .testimonials .testimonial-item h3 {
      font-size: 20px;
      font-weight: bold;
      margin: 10px 0 5px 0;
    }

    .testimonials .testimonial-item h4 {
      font-size: 14px;
      margin: 0 0 15px 0;
      color: color-mix(in srgb, var(--default-color), transparent 40%);
    }

    .testimonials .testimonial-item .stars {
      margin-bottom: 15px;
    }

    .testimonials .testimonial-item .stars i {
      color: #ffc107;
      margin: 0 1px;
    }

    .testimonials .testimonial-item .quote-icon-left,
    .testimonials .testimonial-item .quote-icon-right {
      color: color-mix(in srgb, var(--default-color), transparent 40%);
      font-size: 26px;
      line-height: 0;
    }

    .testimonials .testimonial-item .quote-icon-left {
      display: inline-block;
      left: -5px;
      position: relative;
    }

    .testimonials .testimonial-item .quote-icon-right {
      display: inline-block;
      right: -5px;
      position: relative;
      top: 10px;
      transform: scale(-1, -1);
    }

    .testimonials .testimonial-item p {
      font-style: italic;
      margin: 0 auto 15px auto;
    }

    .testimonials .swiper-wrapper {
      height: auto;
    }

    .testimonials .swiper-pagination {
      margin-top: 20px;
      position: relative;
    }

    .testimonials .swiper-pagination .swiper-pagination-bullet {
      width: 12px;
      height: 12px;
      background-color: color-mix(in srgb, var(--default-color), transparent 50%);
      opacity: 0.5;
    }

    .testimonials .swiper-pagination .swiper-pagination-bullet-active {
      background-color: var(--default-color);
      opacity: 1;
    }

    @media (min-width: 992px) {
      .testimonials .testimonial-item p {
        width: 80%;
      }
    }

    /*--------------------------------------------------------------
# Pricing Section
--------------------------------------------------------------*/
    .pricing .pricing-item {
      background-color: var(--backgroun-color);
      padding: 60px 40px;
      box-shadow: 0 3px 20px -2px rgba(0, 0, 0, 0.1);
      height: 100%;
      display: flex;
      flex-direction: column;
      border: 1px solid color-mix(in srgb, var(--default-color), transparent 90%);
      border-radius: 10px;
      overflow: hidden;
    }

    .pricing .pricing-header {
      background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.3)), url("../img/pricing-bg.jpg") center center;
      background-size: cover;
      text-align: center;
      padding: 40px;
      margin: -60px -40px 0;
    }

    .pricing h3 {
      font-weight: 600;
      margin-bottom: 5px;
      font-size: 36px;
      color: var(--contrast-color);
    }

    .pricing h4 {
      font-size: 48px;
      color: var(--contrast-color);
      font-weight: 400;
      margin-bottom: 0;
    }

    .pricing h4 sup {
      font-size: 28px;
    }

    .pricing h4 span {
      color: color-mix(in srgb, var(--contrast-color), transparent 20%);
      font-size: 24px;
    }

    .pricing ul {
      padding: 30px 0;
      list-style: none;
      color: color-mix(in srgb, var(--default-color), transparent 30%);
      text-align: left;
      line-height: 20px;
    }

    .pricing ul li {
      padding: 10px 0;
      display: flex;
      align-items: center;
    }

    .pricing ul i {
      color: var(--accent-color);
      font-size: 36px;
      padding-right: 3px;
      line-height: 0;
    }

    .pricing ul .na {
      color: color-mix(in srgb, var(--default-color), transparent 60%);
    }

    .pricing ul .na i {
      color: color-mix(in srgb, var(--default-color), transparent 60%);
      font-size: 24px;
      padding-left: 4px;
    }

    .pricing ul .na span {
      text-decoration: line-through;
    }

    .pricing .buy-btn {
      display: inline-block;
      padding: 12px 40px;
      border-radius: 6px;
      color: var(--default-color);
      transition: none;
      font-size: 16px;
      font-weight: 500;
      transition: 0.3s;
      border: 1px solid var(--default-color);
    }

    .pricing .buy-btn:hover {
      background: var(--accent-color);
      color: var(--contrast-color);
      border-color: var(--accent-color);
    }

    .pricing .featured {
      border-color: var(--accent-color);
    }

    .pricing .featured .pricing-header {
      background: linear-gradient(color-mix(in srgb, var(--accent-color), transparent 10%), color-mix(in srgb, var(--accent-color), transparent 20%)), url("../img/pricing-bg.jpg") center center;
    }

    .pricing .featured .buy-btn {
      border-color: var(--accent-color);
      background: var(--accent-color);
      color: var(--contrast-color);
    }

    /*--------------------------------------------------------------
# Faq Section
--------------------------------------------------------------*/
    .faq .content h3 {
      font-weight: 400;
      font-size: 34px;
    }

    .faq .content p {
      color: color-mix(in srgb, var(--default-color), transparent 30%);
    }

    .faq .faq-container {
      margin-top: 15px;
    }

    .faq .faq-container .faq-item {
      background-color: var(--surface-color);
      position: relative;
      padding: 20px;
      margin-bottom: 20px;
      box-shadow: 0px 5px 25px 0px rgba(0, 0, 0, 0.1);
      overflow: hidden;
    }

    .faq .faq-container .faq-item:last-child {
      margin-bottom: 0;
    }

    .faq .faq-container .faq-item h3 {
      font-weight: 600;
      font-size: 17px;
      line-height: 24px;
      margin: 0 30px 0 32px;
      transition: 0.3s;
      cursor: pointer;
    }

    .faq .faq-container .faq-item h3 span {
      color: var(--accent-color);
      padding-right: 5px;
    }

    .faq .faq-container .faq-item h3:hover {
      color: var(--accent-color);
    }

    .faq .faq-container .faq-item .faq-content {
      display: grid;
      grid-template-rows: 0fr;
      transition: 0.3s ease-in-out;
      visibility: hidden;
      opacity: 0;
    }

    .faq .faq-container .faq-item .faq-content p {
      margin-bottom: 0;
      overflow: hidden;
    }

    .faq .faq-container .faq-item .faq-icon {
      position: absolute;
      top: 22px;
      left: 20px;
      font-size: 22px;
      line-height: 0;
      transition: 0.3s;
      color: var(--accent-color);
    }

    .faq .faq-container .faq-item .faq-toggle {
      position: absolute;
      top: 20px;
      right: 20px;
      font-size: 16px;
      line-height: 0;
      transition: 0.3s;
      cursor: pointer;
    }

    .faq .faq-container .faq-item .faq-toggle:hover {
      color: var(--accent-color);
    }

    .faq .faq-container .faq-active h3 {
      color: var(--accent-color);
    }

    .faq .faq-container .faq-active .faq-content {
      grid-template-rows: 1fr;
      visibility: visible;
      opacity: 1;
      padding-top: 10px;
    }

    .faq .faq-container .faq-active .faq-toggle {
      transform: rotate(90deg);
      color: var(--accent-color);
    }

    /*--------------------------------------------------------------
# Portfolio Section
--------------------------------------------------------------*/
    .portfolio .portfolio-filters {
      padding: 0;
      margin: 0 auto 20px auto;
      list-style: none;
      text-align: center;
    }

    .portfolio .portfolio-filters li {
      cursor: pointer;
      display: inline-block;
      padding: 0;
      font-size: 18px;
      font-weight: 400;
      margin: 0 10px;
      line-height: 1;
      margin-bottom: 5px;
      transition: all 0.3s ease-in-out;
    }

    .portfolio .portfolio-filters li:hover,
    .portfolio .portfolio-filters li.filter-active {
      color: var(--accent-color);
    }

    .portfolio .portfolio-filters li:first-child {
      margin-left: 0;
    }

    .portfolio .portfolio-filters li:last-child {
      margin-right: 0;
    }

    @media (max-width: 575px) {
      .portfolio .portfolio-filters li {
        font-size: 14px;
        margin: 0 5px;
      }
    }

    .portfolio .portfolio-content {
      position: relative;
      overflow: hidden;
    }

    .portfolio .portfolio-content img {
      transition: 0.3s;
    }

    .portfolio .portfolio-content .portfolio-info {
      opacity: 0;
      position: absolute;
      inset: 0;
      z-index: 3;
      transition: all ease-in-out 0.3s;
      background: rgba(0, 0, 0, 0.6);
      padding: 15px;
    }

    .portfolio .portfolio-content .portfolio-info h4 {
      font-size: 14px;
      padding: 5px 10px;
      font-weight: 400;
      color: #ffffff;
      display: inline-block;
      background-color: var(--accent-color);
    }

    .portfolio .portfolio-content .portfolio-info p {
      position: absolute;
      bottom: 10px;
      text-align: center;
      display: inline-block;
      left: 0;
      right: 0;
      font-size: 16px;
      font-weight: 600;
      color: rgba(255, 255, 255, 0.8);
    }

    .portfolio .portfolio-content .portfolio-info .preview-link,
    .portfolio .portfolio-content .portfolio-info .details-link {
      position: absolute;
      left: calc(50% - 40px);
      font-size: 26px;
      top: calc(50% - 14px);
      color: #fff;
      transition: 0.3s;
      line-height: 1.2;
    }

    .portfolio .portfolio-content .portfolio-info .preview-link:hover,
    .portfolio .portfolio-content .portfolio-info .details-link:hover {
      color: var(--accent-color);
    }

    .portfolio .portfolio-content .portfolio-info .details-link {
      left: 50%;
      font-size: 34px;
      line-height: 0;
    }

    .portfolio .portfolio-content:hover .portfolio-info {
      opacity: 1;
    }

    .portfolio .portfolio-content:hover img {
      transform: scale(1.1);
    }

    /*--------------------------------------------------------------
# Team Section
--------------------------------------------------------------*/
    .team .team-member .member-img {
      border-radius: 8px;
      overflow: hidden;
    }

    .team .team-member .social {
      position: absolute;
      left: 0;
      top: -18px;
      right: 0;
      opacity: 0;
      transition: ease-in-out 0.3s;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .team .team-member .social a {
      transition: color 0.3s;
      color: var(--contrast-color);
      background: var(--accent-color);
      margin: 0 5px;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 36px;
      height: 36px;
      border-radius: 50%;
      transition: 0.3s;
    }

    .team .team-member .social a i {
      line-height: 0;
      font-size: 16px;
    }

    .team .team-member .social a:hover {
      background: color-mix(in srgb, var(--accent-color) 90%, black 15%);
    }

    .team .team-member .social i {
      font-size: 35px;
      margin: 0 2px;
    }

    .team .team-member .member-info {
      background-color: var(--surface-color);
      padding: 30px 15px;
      text-align: center;
      box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
      background: var(--surface-color);
      margin: -50px 20px 0 20px;
      position: relative;
      border-radius: 8px;
    }

    .team .team-member .member-info h4 {
      font-weight: 500;
      margin-bottom: 5px;
      font-size: 20px;
    }

    .team .team-member .member-info span {
      display: block;
      font-size: 16px;
      font-weight: 400;
      color: color-mix(in srgb, var(--default-color), transparent 30%);
    }

    .team .team-member .member-info p {
      font-style: italic;
      font-size: 14px;
      line-height: 26px;
      color: color-mix(in srgb, var(--default-color), transparent 30%);
    }

    .team .team-member:hover .social {
      opacity: 1;
    }

    /*--------------------------------------------------------------
# Recent Posts Section
--------------------------------------------------------------*/
    .recent-posts article {
      background: var(--surface-color);
      box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
      padding: 30px;
      height: 100%;
      border-radius: 10px;
      overflow: hidden;
    }

    .recent-posts .post-img {
      max-height: 240px;
      margin: -30px -30px 15px -30px;
      overflow: hidden;
    }

    .recent-posts .post-category {
      font-size: 16px;
      color: color-mix(in srgb, var(--default-color), transparent 50%);
      margin-bottom: 10px;
    }

    .recent-posts .title {
      font-size: 20px;
      font-weight: 700;
      padding: 0;
      margin: 0 0 20px 0;
    }

    .recent-posts .title a {
      color: var(--heading-color);
      transition: 0.3s;
    }

    .recent-posts .title a:hover {
      color: var(--accent-color);
    }

    .recent-posts .post-author-img {
      width: 50px;
      border-radius: 50%;
      margin-right: 15px;
    }

    .recent-posts .post-author {
      font-weight: 600;
      margin-bottom: 5px;
    }

    .recent-posts .post-date {
      font-size: 14px;
      color: color-mix(in srgb, var(--default-color), transparent 50%);
      margin-bottom: 0;
    }

    /*--------------------------------------------------------------
# Contact Section
--------------------------------------------------------------*/
    .contact .info {
      background-color: var(--surface-color);
      padding: 40px;
      box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
      overflow: hidden;
    }

    .contact .info h3 {
      font-weight: 600;
      font-size: 24px;
    }

    .contact .info p {
      color: color-mix(in srgb, var(--default-color), transparent 40%);
      margin-bottom: 30px;
      font-size: 15px;
    }

    .contact .info-item+.info-item {
      padding-top: 20px;
      margin-top: 20px;
      border-top: 1px solid color-mix(in srgb, var(--default-color), transparent 90%);
    }

    .contact .info-item i {
      font-size: 24px;
      color: var(--accent-color);
      transition: all 0.3s ease-in-out;
      margin-right: 20px;
    }

    .contact .info-item h4 {
      padding: 0;
      font-size: 18px;
      font-weight: 600;
      margin-bottom: 5px;
    }

    .contact .info-item p {
      padding: 0;
      margin-bottom: 0;
      font-size: 14px;
      color: color-mix(in srgb, var(--default-color), transparent 40%);
    }

    .contact .php-email-form {
      width: 100%;
    }

    .contact .php-email-form .form-group {
      padding-bottom: 8px;
    }

    .contact .php-email-form input[type="text"],
    .contact .php-email-form input[type="email"],
    .contact .php-email-form textarea {
      border-radius: 0px;
      box-shadow: none;
      font-size: 14px;
      background-color: color-mix(in srgb, var(--background-color), transparent 50%);
      border-color: color-mix(in srgb, var(--default-color), transparent 80%);
    }

    .contact .php-email-form input[type="text"]:focus,
    .contact .php-email-form input[type="email"]:focus,
    .contact .php-email-form textarea:focus {
      border-color: var(--accent-color);
    }

    .contact .php-email-form input[type="text"],
    .contact .php-email-form input[type="email"] {
      height: 48px;
      padding: 10px 15px;
    }

    .contact .php-email-form textarea {
      padding: 10px 12px;
      height: 290px;
    }

    .contact .php-email-form button[type="submit"] {
      background: var(--accent-color);
      color: var(--contrast-color);
      border: 0;
      padding: 13px 50px;
      transition: 0.4s;
      border-radius: 4px;
    }

    .contact .php-email-form button[type="submit"]:hover {
      background: color-mix(in srgb, var(--accent-color) 90%, black 15%);
    }

    /*--------------------------------------------------------------
# Portfolio Details Section
--------------------------------------------------------------*/
    .portfolio-details .portfolio-details-slider img {
      width: 100%;
    }

    .portfolio-details .swiper-wrapper {
      height: auto;
    }

    .portfolio-details .swiper-button-prev,
    .portfolio-details .swiper-button-next {
      width: 48px;
      height: 48px;
    }

    .portfolio-details .swiper-button-prev:after,
    .portfolio-details .swiper-button-next:after {
      color: rgba(255, 255, 255, 0.8);
      background-color: rgba(0, 0, 0, 0.15);
      font-size: 24px;
      border-radius: 50%;
      width: 48px;
      height: 48px;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: 0.3s;
    }

    .portfolio-details .swiper-button-prev:hover:after,
    .portfolio-details .swiper-button-next:hover:after {
      background-color: rgba(0, 0, 0, 0.3);
    }

    @media (max-width: 575px) {

      .portfolio-details .swiper-button-prev,
      .portfolio-details .swiper-button-next {
        display: none;
      }
    }

    .portfolio-details .swiper-pagination {
      margin-top: 20px;
      position: relative;
    }

    .portfolio-details .swiper-pagination .swiper-pagination-bullet {
      width: 10px;
      height: 10px;
      background-color: color-mix(in srgb, var(--default-color), transparent 85%);
      opacity: 1;
    }

    .portfolio-details .swiper-pagination .swiper-pagination-bullet-active {
      background-color: var(--accent-color);
    }

    .portfolio-details .portfolio-info h3 {
      font-size: 22px;
      font-weight: 700;
      margin-bottom: 20px;
      padding-bottom: 20px;
      position: relative;
    }

    .portfolio-details .portfolio-info h3:after {
      content: "";
      position: absolute;
      display: block;
      width: 50px;
      height: 3px;
      background: var(--accent-color);
      left: 0;
      bottom: 0;
    }

    .portfolio-details .portfolio-info ul {
      list-style: none;
      padding: 0;
      font-size: 15px;
    }

    .portfolio-details .portfolio-info ul li {
      display: flex;
      flex-direction: column;
      padding-bottom: 15px;
    }

    .portfolio-details .portfolio-info ul strong {
      text-transform: uppercase;
      font-weight: 400;
      color: color-mix(in srgb, var(--default-color), transparent 50%);
      font-size: 14px;
    }

    .portfolio-details .portfolio-info .btn-visit {
      padding: 8px 40px;
      background: var(--accent-color);
      color: var(--contrast-color);
      border-radius: 50px;
      transition: 0.3s;
    }

    .portfolio-details .portfolio-info .btn-visit:hover {
      background: color-mix(in srgb, var(--accent-color), transparent 20%);
    }

    .portfolio-details .portfolio-description h2 {
      font-size: 26px;
      font-weight: 700;
      margin-bottom: 20px;
    }

    .portfolio-details .portfolio-description p {
      padding: 0;
    }

    .portfolio-details .portfolio-description .testimonial-item {
      padding: 30px 30px 0 30px;
      position: relative;
      background: color-mix(in srgb, var(--default-color), transparent 97%);
      margin-bottom: 50px;
    }

    .portfolio-details .portfolio-description .testimonial-item .testimonial-img {
      width: 90px;
      border-radius: 50px;
      border: 6px solid var(--background-color);
      float: left;
      margin: 0 10px 0 0;
    }

    .portfolio-details .portfolio-description .testimonial-item h3 {
      font-size: 18px;
      font-weight: bold;
      margin: 15px 0 5px 0;
      padding-top: 20px;
    }

    .portfolio-details .portfolio-description .testimonial-item h4 {
      font-size: 14px;
      color: #6c757d;
      margin: 0;
    }

    .portfolio-details .portfolio-description .testimonial-item .quote-icon-left,
    .portfolio-details .portfolio-description .testimonial-item .quote-icon-right {
      color: color-mix(in srgb, var(--accent-color), transparent 50%);
      font-size: 26px;
      line-height: 0;
    }

    .portfolio-details .portfolio-description .testimonial-item .quote-icon-left {
      display: inline-block;
      left: -5px;
      position: relative;
    }

    .portfolio-details .portfolio-description .testimonial-item .quote-icon-right {
      display: inline-block;
      right: -5px;
      position: relative;
      top: 10px;
      transform: scale(-1, -1);
    }

    .portfolio-details .portfolio-description .testimonial-item p {
      font-style: italic;
      margin: 0 0 15px 0 0 0;
      padding: 0;
    }

    /*--------------------------------------------------------------
# Service Details Section
--------------------------------------------------------------*/
    .service-details .services-list {
      background-color: var(--surface-color);
      padding: 10px 30px;
      border: 1px solid color-mix(in srgb, var(--default-color), transparent 90%);
      margin-bottom: 20px;
    }

    .service-details .services-list a {
      display: block;
      line-height: 1;
      padding: 8px 0 8px 15px;
      border-left: 3px solid color-mix(in srgb, var(--default-color), transparent 70%);
      margin: 20px 0;
      color: color-mix(in srgb, var(--default-color), transparent 20%);
      transition: 0.3s;
    }

    .service-details .services-list a.active {
      color: var(--heading-color);
      font-weight: 700;
      border-color: var(--accent-color);
    }

    .service-details .services-list a:hover {
      border-color: var(--accent-color);
    }

    .service-details .services-img {
      margin-bottom: 20px;
    }

    .service-details h3 {
      font-size: 26px;
      font-weight: 700;
    }

    .service-details h4 {
      font-size: 20px;
      font-weight: 700;
    }

    .service-details p {
      font-size: 15px;
    }

    .service-details ul {
      list-style: none;
      padding: 0;
      font-size: 15px;
    }

    .service-details ul li {
      padding: 5px 0;
      display: flex;
      align-items: center;
    }

    .service-details ul i {
      font-size: 20px;
      margin-right: 8px;
      color: var(--accent-color);
    }

    /*--------------------------------------------------------------
# Blog Posts Section
--------------------------------------------------------------*/
    .blog-posts article {
      background-color: var(--surface-color);
      box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
      padding: 30px;
      height: 100%;
      border-radius: 10px;
      overflow: hidden;
    }

    .blog-posts .post-img {
      max-height: 240px;
      margin: -30px -30px 15px -30px;
      overflow: hidden;
    }

    .blog-posts .post-category {
      font-size: 16px;
      color: color-mix(in srgb, var(--default-color), transparent 40%);
      margin-bottom: 10px;
    }

    .blog-posts .title {
      font-size: 20px;
      font-weight: 700;
      padding: 0;
      margin: 0 0 20px 0;
    }

    .blog-posts .title a {
      color: var(--heading-color);
      transition: 0.3s;
    }

    .blog-posts .title a:hover {
      color: var(--accent-color);
    }

    .blog-posts .post-author-img {
      width: 50px;
      border-radius: 50%;
      margin-right: 15px;
    }

    .blog-posts .post-author {
      font-weight: 600;
      margin-bottom: 5px;
    }

    .blog-posts .post-date {
      font-size: 14px;
      color: color-mix(in srgb, var(--default-color), transparent 40%);
      margin-bottom: 0;
    }

    /*--------------------------------------------------------------
# Blog Pagination Section
--------------------------------------------------------------*/
    .blog-pagination {
      padding-top: 0;
      color: color-mix(in srgb, var(--default-color), transparent 40%);
    }

    .blog-pagination ul {
      display: flex;
      padding: 0;
      margin: 0;
      list-style: none;
    }

    .blog-pagination li {
      margin: 0 5px;
      transition: 0.3s;
    }

    .blog-pagination li a {
      color: color-mix(in srgb, var(--default-color), transparent 40%);
      padding: 7px 16px;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .blog-pagination li a.active,
    .blog-pagination li a:hover {
      background: var(--accent-color);
      color: var(--contrast-color);
    }

    .blog-pagination li a.active a,
    .blog-pagination li a:hover a {
      color: var(--contrast-color);
    }

    /*--------------------------------------------------------------
# Blog Details Section
--------------------------------------------------------------*/
    .blog-details {
      padding-bottom: 30px;
    }

    .blog-details .article {
      background-color: var(--surface-color);
      padding: 30px;
      box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
    }

    .blog-details .post-img {
      margin: -30px -30px 20px -30px;
      overflow: hidden;
    }

    .blog-details .title {
      color: var(--heading-color);
      font-size: 28px;
      font-weight: 700;
      padding: 0;
      margin: 30px 0;
    }

    .blog-details .content {
      margin-top: 20px;
    }

    .blog-details .content h3 {
      font-size: 22px;
      margin-top: 30px;
      font-weight: bold;
    }

    .blog-details .content blockquote {
      overflow: hidden;
      background-color: color-mix(in srgb, var(--default-color), transparent 95%);
      padding: 60px;
      position: relative;
      text-align: center;
      margin: 20px 0;
    }

    .blog-details .content blockquote p {
      color: var(--default-color);
      line-height: 1.6;
      margin-bottom: 0;
      font-style: italic;
      font-weight: 500;
      font-size: 22px;
    }

    .blog-details .content blockquote:after {
      content: "";
      position: absolute;
      left: 0;
      top: 0;
      bottom: 0;
      width: 3px;
      background-color: var(--accent-color);
      margin-top: 20px;
      margin-bottom: 20px;
    }

    .blog-details .meta-top {
      margin-top: 20px;
      color: color-mix(in srgb, var(--default-color), transparent 40%);
    }

    .blog-details .meta-top ul {
      display: flex;
      flex-wrap: wrap;
      list-style: none;
      align-items: center;
      padding: 0;
      margin: 0;
    }

    .blog-details .meta-top ul li+li {
      padding-left: 20px;
    }

    .blog-details .meta-top i {
      font-size: 16px;
      margin-right: 8px;
      line-height: 0;
      color: color-mix(in srgb, var(--default-color), transparent 40%);
    }

    .blog-details .meta-top a {
      color: color-mix(in srgb, var(--default-color), transparent 40%);
      font-size: 14px;
      display: inline-block;
      line-height: 1;
    }

    .blog-details .meta-bottom {
      padding-top: 10px;
      border-top: 1px solid color-mix(in srgb, var(--default-color), transparent 90%);
    }

    .blog-details .meta-bottom i {
      color: color-mix(in srgb, var(--default-color), transparent 40%);
      display: inline;
    }

    .blog-details .meta-bottom a {
      color: color-mix(in srgb, var(--default-color), transparent 40%);
      transition: 0.3s;
    }

    .blog-details .meta-bottom a:hover {
      color: var(--accent-color);
    }

    .blog-details .meta-bottom .cats {
      list-style: none;
      display: inline;
      padding: 0 20px 0 0;
      font-size: 14px;
    }

    .blog-details .meta-bottom .cats li {
      display: inline-block;
    }

    .blog-details .meta-bottom .tags {
      list-style: none;
      display: inline;
      padding: 0;
      font-size: 14px;
    }

    .blog-details .meta-bottom .tags li {
      display: inline-block;
    }

    .blog-details .meta-bottom .tags li+li::before {
      padding-right: 6px;
      color: var(--default-color);
      content: ",";
    }

    .blog-details .meta-bottom .share {
      font-size: 16px;
    }

    .blog-details .meta-bottom .share i {
      padding-left: 5px;
    }

    /*--------------------------------------------------------------
# Blog Author Section
--------------------------------------------------------------*/
    .blog-author {
      padding: 10px 0 40px 0;
    }

    .blog-author .author-container {
      background-color: var(--surface-color);
      padding: 20px;
      box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
    }

    .blog-author img {
      max-width: 120px;
      margin-right: 20px;
    }

    .blog-author h4 {
      font-weight: 600;
      font-size: 20px;
      margin-bottom: 0px;
      padding: 0;
      color: color-mix(in srgb, var(--default-color), transparent 20%);
    }

    .blog-author .social-links {
      margin: 0 10px 10px 0;
    }

    .blog-author .social-links a {
      color: color-mix(in srgb, var(--default-color), transparent 60%);
      margin-right: 5px;
    }

    .blog-author p {
      font-style: italic;
      color: color-mix(in srgb, var(--default-color), transparent 30%);
      margin-bottom: 0;
    }

    /*--------------------------------------------------------------
# Blog Comments Section
--------------------------------------------------------------*/
    .blog-comments {
      padding: 10px 0;
    }

    .blog-comments .comments-count {
      font-weight: bold;
    }

    .blog-comments .comment {
      margin-top: 30px;
      position: relative;
    }

    .blog-comments .comment .comment-img {
      margin-right: 14px;
    }

    .blog-comments .comment .comment-img img {
      width: 60px;
    }

    .blog-comments .comment h5 {
      font-size: 16px;
      margin-bottom: 2px;
    }

    .blog-comments .comment h5 a {
      font-weight: bold;
      color: var(--default-color);
      transition: 0.3s;
    }

    .blog-comments .comment h5 a:hover {
      color: var(--accent-color);
    }

    .blog-comments .comment h5 .reply {
      padding-left: 10px;
      color: color-mix(in srgb, var(--default-color), transparent 20%);
    }

    .blog-comments .comment h5 .reply i {
      font-size: 20px;
    }

    .blog-comments .comment time {
      display: block;
      font-size: 14px;
      color: color-mix(in srgb, var(--default-color), transparent 40%);
      margin-bottom: 5px;
    }

    .blog-comments .comment.comment-reply {
      padding-left: 40px;
    }

    /*--------------------------------------------------------------
# Comment Form Section
--------------------------------------------------------------*/
    .comment-form {
      padding-top: 10px;
    }

    .comment-form form {
      background-color: var(--surface-color);
      margin-top: 30px;
      padding: 30px;
      box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
    }

    .comment-form form h4 {
      font-weight: bold;
      font-size: 22px;
    }

    .comment-form form p {
      font-size: 14px;
    }

    .comment-form form input {
      background-color: var(--surface-color);
      color: var(--default-color);
      border: 1px solid color-mix(in srgb, var(--default-color), transparent 70%);
      font-size: 14px;
      border-radius: 4px;
      padding: 10px 10px;
    }

    .comment-form form input:focus {
      color: var(--default-color);
      background-color: var(--surface-color);
      box-shadow: none;
      border-color: var(--accent-color);
    }

    .comment-form form input::placeholder {
      color: color-mix(in srgb, var(--default-color), transparent 50%);
    }

    .comment-form form textarea {
      background-color: var(--surface-color);
      color: var(--default-color);
      border: 1px solid color-mix(in srgb, var(--default-color), transparent 70%);
      border-radius: 4px;
      padding: 10px 10px;
      font-size: 14px;
      height: 120px;
    }

    .comment-form form textarea:focus {
      color: var(--default-color);
      box-shadow: none;
      border-color: var(--accent-color);
      background-color: var(--surface-color);
    }

    .comment-form form textarea::placeholder {
      color: color-mix(in srgb, var(--default-color), transparent 50%);
    }

    .comment-form form .form-group {
      margin-bottom: 25px;
    }

    .comment-form form .btn-primary {
      border-radius: 4px;
      padding: 10px 20px;
      border: 0;
      background-color: var(--accent-color);
      color: var(--contrast-color);
    }

    .comment-form form .btn-primary:hover {
      color: var(--contrast-color);
      background-color: color-mix(in srgb, var(--accent-color), transparent 20%);
    }

    /*--------------------------------------------------------------
# Starter Section Section
--------------------------------------------------------------*/

    /*--------------------------------------------------------------
# Widgets
--------------------------------------------------------------*/
    .widgets-container {
      background-color: var(--surface-color);
      padding: 30px;
      margin: 60px 0 30px 0;
      box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
    }

    .widget-title {
      color: var(--heading-color);
      font-size: 20px;
      font-weight: 700;
      padding: 0;
      margin: 0 0 20px 0;
    }

    .widget-item {
      margin-bottom: 40px;
    }

    .widget-item:last-child {
      margin-bottom: 0;
    }

    .search-widget form {
      background: var(--background-color);
      border: 1px solid color-mix(in srgb, var(--default-color), transparent 70%);
      padding: 3px 10px;
      position: relative;
      transition: 0.3s;
    }

    .search-widget form input[type="text"] {
      border: 0;
      padding: 4px;
      border-radius: 4px;
      width: calc(100% - 40px);
      background-color: var(--background-color);
      color: var(--default-color);
    }

    .search-widget form input[type="text"]:focus {
      outline: none;
    }

    .search-widget form button {
      background: var(--accent-color);
      color: var(--contrast-color);
      position: absolute;
      top: 0;
      right: 0;
      bottom: 0;
      border: 0;
      font-size: 16px;
      padding: 0 15px;
      margin: -1px;
      transition: 0.3s;
      border-radius: 0 4px 4px 0;
      line-height: 0;
    }

    .search-widget form button i {
      line-height: 0;
    }

    .search-widget form button:hover {
      background: color-mix(in srgb, var(--accent-color), transparent 20%);
    }

    .search-widget form:is(:focus-within) {
      border-color: var(--accent-color);
    }

    .categories-widget ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .categories-widget ul li {
      padding-bottom: 10px;
    }

    .categories-widget ul li:last-child {
      padding-bottom: 0;
    }

    .categories-widget ul a {
      color: color-mix(in srgb, var(--default-color), transparent 20%);
      transition: 0.3s;
    }

    .categories-widget ul a:hover {
      color: var(--accent-color);
    }

    .categories-widget ul a span {
      padding-left: 5px;
      color: color-mix(in srgb, var(--default-color), transparent 50%);
      font-size: 14px;
    }

    .recent-posts-widget .post-item {
      display: flex;
      margin-bottom: 15px;
    }

    .recent-posts-widget .post-item:last-child {
      margin-bottom: 0;
    }

    .recent-posts-widget .post-item img {
      width: 80px;
      margin-right: 15px;
    }

    .recent-posts-widget .post-item h4 {
      font-size: 15px;
      font-weight: bold;
      margin-bottom: 5px;
    }

    .recent-posts-widget .post-item h4 a {
      color: var(--default-color);
      transition: 0.3s;
    }

    .recent-posts-widget .post-item h4 a:hover {
      color: var(--accent-color);
    }

    .recent-posts-widget .post-item time {
      display: block;
      font-style: italic;
      font-size: 14px;
      color: color-mix(in srgb, var(--default-color), transparent 50%);
    }

    .tags-widget {
      margin-bottom: -10px;
    }

    .tags-widget ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .tags-widget ul li {
      display: inline-block;
    }

    .tags-widget ul a {
      color: color-mix(in srgb, var(--default-color), transparent 30%);
      font-size: 14px;
      padding: 6px 14px;
      margin: 0 6px 8px 0;
      border: 1px solid color-mix(in srgb, var(--default-color), transparent 60%);
      display: inline-block;
      transition: 0.3s;
    }

    .tags-widget ul a:hover {
      background: var(--accent-color);
      color: var(--contrast-color);
      border: 1px solid var(--accent-color);
    }

    .tags-widget ul a span {
      padding-left: 5px;
      color: color-mix(in srgb, var(--default-color), transparent 60%);
      font-size: 14px;
    }
  </style>

  <!-- =======================================================
  * Template Name: HeroBiz
  * Template URL: https://bootstrapmade.com/herobiz-bootstrap-business-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">
  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid position-relative d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">SMK</h1>
        <span>.PK</span>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Home<br /></a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#services">Achievements</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#teacher">Teacher</a></li>
          <!-- <li><a href="blog.php">Blog</a></li> -->
          <li class="dropdown">
            <a href="#"><span>Data</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>

              <!-- <li class="dropdown">
                  <a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                  <ul>
                    <li><a href="#">Deep Dropdown 1</a></li>
                    <li><a href="#">Deep Dropdown 2</a></li>
                    <li><a href="#">Deep Dropdown 3</a></li>
                    <li><a href="#">Deep Dropdown 4</a></li>
                    <li><a href="#">Deep Dropdown 5</a></li>
                  </ul>
                </li> -->
              <li><a href="#">Product</a></li>
              <li><a href="#">Teacher</a></li>
              <li><a href="#">Student </a></li>
            </ul>
          </li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
        <a class="btn-getstarted" href="#"><?php echo htmlspecialchars($_SESSION['username']); ?></a>
      <?php else: ?>
        <a class="btn-getstarted" href="login-option.php">Login</a>
      <?php endif; ?>
    </div>
  </header>

  <main class="main">
    <!-- Hero Section -->
    <section id="hero" class="hero section">
      <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative"
        data-aos="zoom-out">
        <img src="assets/img/SMKN10 (2).jpeg" class="img-fluid animated" alt="" />
        <h1>Welcome to PP<span>LG</span><b> SMK N 10 Semarang</b></h1>
        <p>Sekolah dengan Pusat Keunggulan pada bidang keahlian <span><b>Pengembangan Perangkat Lunak dan Gim</b></span>
        </p>
        <div class="d-flex">
          <a href="login.php" class="btn-get-started scrollto">Login</a>
          <a href="https://youtu.be/tKqXhUyuOm4?si=usGzcozN0NyGubcb"
            class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch
              Video</span></a>
        </div>
      </div>
    </section>
    <!-- /Hero Section -->

    <!-- Featured Services Section -->
    <section id="featured-services" class="featured-services section">
      <div class="container">
        <div class="row gy-4">
          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon"><img src="assets/img/icon/code.png" alt="Ruota di nave" width="50" height="50"></div>
              <h4><a href="" class="stretched-link">RPL</a></h4>
              <p>Jurusan <b>Rekayasa Perangkat Lunak</b> adalah bidang ilmu yang mempelajari cara membuat, memelihara,
                dan mengelola perangkat lunak. RPL juga mempelajari prinsip dan teknik mendesain perangkat lunak yang
                mudah digunakan dan tepat guna</p>
            </div>
          </div>
          <!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon"><img src="assets/img/icon/car-engine.png" alt="Ruota di nave" width="50" height="50">
              </div>
              <h4><a href="" class="stretched-link">TKR</a></h4>
              <p>Jurusan <b>Teknik Kendaraan Ringan</b> adalah bidang studi yang mempelajari tentang perawatan,
                perbaikan, dan pemahaman mengenai kendaraan bermotor ringan. Jurusan ini mempelajari berbagai sistem
                kendaraan, seperti mesin, transmisi, sistem kelistrikan, dan lainnya</p>
            </div>
          </div>
          <!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <div class="icon"><img src="assets/img/icon/motorbike.png" alt="Ruota di nave" width="50" height="50">
              </div>
              <h4><a href="" class="stretched-link">TSM</a></h4>
              <p>Jurusan <b>Teknik Sepeda Motor</b> adalah kompetensi keahlian yang mempelajari tentang perakitan,
                perawatan, dan perbaikan sepeda motor. TSM merupakan salah satu konsentrasi keahlian dalam program
                keahlian Teknik Otomotif</p>
            </div>
          </div>
          <!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
              <div class="icon"><img src="assets/img/icon/ship-wheel.png" alt="Ruota di nave" width="50" height="50">
              </div>
              <h4><a href="" class="stretched-link">NKN</a></h4>
              <p>Jurusan <b>Nautika Kapal Niaga</b> mempelajari ilmu dan keahlian terkait pengoperasian kapal niaga.
                Materi yang dipelajari meliputi navigasi, keselamatan kapal, dan bahari</p>
            </div>
          </div>
          <!-- End Service Item -->
          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
              <div class="icon"><img src="assets/img/icon/welding.png" alt="Ruota di nave" width="50" height="50"></div>
              <h4><a href="" class="stretched-link">TP</a></h4>
              <p>Jurusan <b>Teknik Pengelasan</b> Mempelajari berbagai teknik penyambungan logam menggunakan panas dan
                tekanan. Teknik ini juga dikenal dengan istilah welding</p>
            </div>
          </div>
          <!-- End Service Item -->
          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
              <div class="icon"><img src="assets/img/icon/body-ship.png" alt="Ruota di nave" width="50" height="50"></i>
              </div>
              <h4><a href="" class="stretched-link">KKB</a></h4>
              <p>Jurusan <b>Konstruksi Kapal Baja</b> mempelajari tentang proses perancangan, pembuatan, dan perawatan
                kapal yang terbuat dari baja</p>
            </div>
          </div>
          <!-- End Service Item -->
          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
              <div class="icon"><img src="assets/img/icon/ship-engine.png" alt="Ruota di nave" width="50" height="50">
              </div>
              <h4><a href="" class="stretched-link">TPK</a></h4>
              <p>Jurusan <b>Teknik Permesinan Kapal</b> mempelajari tentang perancangan, konstruksi, perawatan, dan
                perbaikan sistem permesinan kapal</p>
            </div>
          </div>
          <!-- End Service Item -->
          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
              <div class="icon"><img src="assets/img/icon/logistics-management.png" alt="Ruota di nave" width="50"
                  height="50"></div>
              <h4><a href="" class="stretched-link">MANLOG</a></h4>
              <p>Jurusan <b>Manajemen Logistik</b> mempelajari proses pengiriman barang, pergudangan, dan pengelolaan
                barang lainnya</p>
            </div>
          </div>
          <!-- End Service Item -->
        </div>
      </div>
    </section>
    <!-- /Featured Services Section -->

    <!-- About Section -->
    <section id="about" class="about section">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>About Us</h2>
        <p>Peran jurusan Pengembangan Perangkat Lunak dan Gim</p>
      </div>
      <!-- End Section Title -->

      <div class="container" data-aos="fade-up">
        <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">
          <div class="col-lg-5">
            <div class="about-img">
              <img src="assets/img/LOGOrpl.png" class="img-fluid" alt="" />
            </div>
          </div>

          <div class="col-lg-7">
            <h3 class="pt-0 pt-lg-5">Sekolah dengan Pusat Keunggulan pada bidang keahlian <b>Pengembangan Perangkat
                Lunak dan Gim</b></h3>

            <!-- Tabs -->
            <ul class="nav nav-pills mb-3">
              <li><a class="nav-link active" data-bs-toggle="pill" href="#about-tab1">Visi & Misi</a></li>
              <li><a class="nav-link" data-bs-toggle="pill" href="#about-tab2">Tentang RPL</a></li>
              <li><a class="nav-link" data-bs-toggle="pill" href="#about-tab3">Peluang Kerja</a></li>
            </ul>
            <!-- End Tabs -->

            <!-- Tab Content -->
            <div class="tab-content">
              <div class="tab-pane fade show active" id="about-tab1">
                <p class="fst-italic">Berikut merupakan Visi dan Misi kami SMK Negeri 10 Semarang</p>

                <div class="d-flex align-items-center mt-4">
                  <!-- <i class="bi bi-check2"></i> -->
                  <h4>Visi :</h4>
                </div>
                <p>“Menghebatkan SMKN 10 Semarang melalui Tinggal Landas Pembangunan Sekolah secara Terukur Berbasis
                  Literasi dan Digitalisasi.”</p>

                <div class="d-flex align-items-center mt-4">
                  <!-- <i class="bi bi-check2"></i> -->
                  <h4>Misi :</h4>
                </div>
                <p>1. Meningkatkan Literasi Siswa dan Guru dengan menyediakan program dan lingkungan pembelajaran yang
                  mendorong minat baca dan pengembangan ketrampilan literasi.</p>
                <p>2. Menerapkan Pendekatan Digital dalam Pembelajaran dengan integrasi teknologi digital dan pelatihan
                  guru secara reguler.</p>
                <p>3. Mengembangkan Kurikulum Berbasis Literasi dan Digitalisasi.</p>
                <p>4. Meningkatkan Kompetensi Guru dalam penggunaan metode pembelajaran inovatif dengan memberikan akses
                  ke sumber daya pendidikan digital</p>
                <p>5. Membangun Kemitraan dengan Iduka untuk memperkuat link and match dengan perkembangan industri.</p>
                <p>6. Melakukan evaluasi berdasarkan data untuk menyusun rencana aksi perbaikan dan pengembangan sekolah
                </p>


              </div>
              <!-- End Tab 1 Content -->

              <div class="tab-pane fade" id="about-tab2">
                <p class="fst-italic">Apa sih Pengembangan Perangkat Lunak dan Gim Itu??</p>

                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>Pengembangan Perangkat Lunak dan Gim (PPGL)</h4>
                </div>
                <p>Pengembangan Perangkat Lunak dan Gim adalah bidang studi yang berfokus pada penciptaan aplikasi
                  perangkat lunak, gim digital, dan solusi teknologi. Jurusan ini mengajarkan keterampilan pemrograman,
                  desain antarmuka, manajemen proyek, dan pengembangan gim menggunakan berbagai bahasa dan platform.
                  Mahasiswa belajar membuat perangkat lunak inovatif yang dapat digunakan untuk kebutuhan industri,
                  pendidikan, atau hiburan. Selain itu, pengembangan gim mencakup desain level, animasi, dan
                  pengintegrasian elemen interaktif untuk menciptakan pengalaman pengguna yang menarik. Kurikulum
                  dirancang untuk melatih kreativitas, analisis, dan kolaborasi dalam menyelesaikan tantangan teknologi.
                  Jurusan ini relevan dengan kebutuhan industri 4.0, termasuk kecerdasan buatan dan realitas virtual.
                  Lulusan dapat bekerja sebagai pengembang aplikasi, desainer gim, atau insinyur perangkat lunak. Mereka
                  juga berkontribusi pada kemajuan teknologi di berbagai sektor. Bidang ini cocok bagi individu dengan
                  minat pada teknologi, seni digital, dan inovasi.</p>


              </div>
              <!-- End Tab 2 Content -->

              <div class="tab-pane fade" id="about-tab3">
                <p class="fst-italic">Berikut adalah beberapa peluang kerja yang tersedia bagi lulusan jurusan
                  Pengembangan Perangkat Lunak dan Gim:</p>

                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>Software Developer</h4>
                </div>
                <p>Mengembangkan aplikasi perangkat lunak untuk berbagai kebutuhan, seperti bisnis, pendidikan, dan
                  hiburan.</p>

                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>Game Developer</h4>
                </div>
                <p>Membuat gim digital untuk platform seperti PC, konsol, dan perangkat seluler, termasuk desain level,
                  pemrograman, dan animasi.</p>

                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>UI/UX Designer</h4>
                </div>
                <p>Merancang antarmuka pengguna yang intuitif dan meningkatkan pengalaman pengguna pada aplikasi atau
                  gim.</p>

                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>Web Developer</h4>
                </div>
                <p>Membuat dan mengelola situs web interaktif dengan teknologi terkini.</p>
              </div>
              <!-- End Tab 3 Content -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /About Section -->

    <!-- Clients Section -->
    <section id="clients" class="clients section">
      <div class="container" data-aos="fade-up">
        <div class="row gy-4">
          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/zicare.png" class="img-fluid" alt="" />
          </div>
          <!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/nexa.png" class="img-fluid" alt="" />
          </div>
          <!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/logo-itho.png" class="img-fluid" alt="" />
          </div>
          <!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/educourse.png " class="img-fluid" alt="" />
          </div>
          <!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/logo-telkomsel.png" class="img-fluid" alt="" />
          </div>
          <!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/crocodic.png" class="img-fluid" alt="" />
          </div>
          <!-- End Client Item -->
        </div>
      </div>
    </section>
    <!-- /Clients Section -->

    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section">
      <div class="container" data-aos="zoom-out">
        <div class="row g-5">
          <div class="col-lg-8 col-md-6 content d-flex flex-column justify-content-center order-last order-md-first">
            <h3>Haii.. My Name is <em>Joel Nissi</em> aku seorang...</h3>
            <p>Aku pelajar semester akhir yang sedang membangun website ini, aku bersekolah di SMK Negeri 10 Semarang
              dan aku mendalami pada bidang keahlian Pengembangan Perangkat Lunak dan Gim. Hoby adalah membuat video
              atau menangkap moment dengan memotret gambar dengan kamera.</p>
            <a class="cta-btn align-self-start" href="https://www.instagram.com/joelnissi.aa/">Click For More</a>
          </div>

          <div class="col-lg-4 col-md-6 order-first order-md-last d-flex align-items-center">
            <div class="img">
              <img src="assets/img/joel.jpg" alt="" class="img-fluid" />
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /Call To Action Section -->

    <!-- Onfocus Section -->
    <section id="onfocus" class="onfocus section dark-background">
      <div class="container-fluid p-0" data-aos="fade-up">
        <div class="row g-0">
          <div class="col-lg-6 video-play position-relative">
            <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox pulsating-play-btn"></a>
          </div>
          <div class="col-lg-6">
            <div class="content d-flex flex-column justify-content-center h-100">
              <h3>SMKN 10 Semarang Menuju Sekolah Berbasis Digital</h3>
              <p class="fst-italic">SMKN 10 Semarang berkomitmen untuk terus berinovasi dan memajukan pendidikan di era
                digital. Dengan dukungan penuh dari semua pihak, SMKN 10 Semarang bergerak maju untuk menjadi sebuah
                sekolah berbasis digital yang memanfaatkan teknologi untuk mendukung proses belajar-mengajar yang lebih
                efektif dan efisien.</p>
              <ul>
                <li><i class="bi bi-check-circle"></i> Pembangunan infrastruktur jaringan yang handal dan cepat untuk
                  menunjang penggunaan teknologi di sekolah.</li>
                <li><i class="bi bi-check-circle"></i> Pengadaan perangkat dan aplikasi digital yang berkualitas untuk
                  mendukung pembelajaran, seperti laptop, tablet, dan software pendidikan.</li>
                <li><i class="bi bi-check-circle"></i> Pelatihan dan pengembangan guru agar mampu menguasai teknologi
                  dan memanfaatkannya dalam pembelajaran.</li>
                <li><i class="bi bi-check-circle"></i>Pengembangan kurikulum dan materi pembelajaran yang berbasis
                  digital untuk meningkatkan kualitas dan efektivitas pembelajaran.</li>
                <li><i class="bi bi-check-circle"></i> Penyediaan platform digital yang dapat diakses oleh siswa dan
                  guru secara fleksibel dan mudah.</li>
              </ul>
              <a href="#" class="read-more align-self-start"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /Onfocus Section -->



    <!-- Services Section -->
    <section id="services" class="services section">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Prestasi Siswa</h2>
        <p>Teruslah berkarya dan Tekun dalam minat Anda</p>
      </div>
      <!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-5">
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="assets/img/Pres01.jpeg" class="img-fluid" alt="" />
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-activity"></i>
                </div>
                <a href="service-details.html" class="stretched-link">
                  <h3>Raih Juara 1 DINACOM 2025 dengan Inovasi PETAPA</h3>
                </a>
                <p>Prestasi membanggakan kembali diukir oleh SMKN 10 Semarang dalam ajang Dinus Application Competition
                  (DINACOM) 2025 kategori AIDeathon.</p>
              </div>
            </div>
          </div>
          <!-- End Service Item -->

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
            <div class="service-item">
              <div class="img">
                <img src="assets/img/Press02.jpeg" class="img-fluid" alt="" />
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-broadcast"></i>
                </div>
                <a href="service-details.html" class="stretched-link">
                  <h3>Bersinar di Pertandingan Eksibisi Badminton</h3>
                </a>
                <p>dipenuhi semangat dan antusiasme tinggi dari siswa-siswa yang mengikuti Pertandingan Eksibisi
                  Badminton Siswa</p>
              </div>
            </div>
          </div>
          <!-- End Service Item -->

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
            <div class="service-item">
              <div class="img">
                <img src="assets/img/Press06.jpeg" class="img-fluid" alt="" />
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-chat-square-text"></i>
                </div>
                <a href="service-details.html" class="stretched-link">
                  <h3>Menjadi Peserta Terbaik dalam Pelatihan Cyber Security PT. Telkom </h3>
                </a>
                <p>PT. Telkom Indonesia menyelenggarakan Pelatihan Cyber Security untuk siswa kelas X RPL dari berbagai
                  SMKN di Kota Semarang</p>
                <a href="service-details.html" class="stretched-link"></a>
              </div>
            </div>
          </div>
          <!-- End Service Item -->

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="500">
            <div class="service-item">
              <div class="img">
                <img src="assets/img/Press04.jpg" class="img-fluid" alt="" />
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-bounding-box-circles"></i>
                </div>
                <a href="service-details.html" class="stretched-link">
                  <h3>Raih Juara 2 di Mechanical Engineering CAD Tingkat Kota Semarang</h3>
                </a>
                <p>Fahlefi berhasil meraih Juara 2 dalam ajang Mechanical Engineering CAD yang berlangsung pada 28
                  November 2024 di SMK Negeri 1 Semarang.</p>
                <a href="service-details.html" class="stretched-link"></a>
              </div>
            </div>
          </div>
          <!-- End Service Item -->

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="600">
            <div class="service-item">
              <div class="img">
                <img src="assets/img/Pres05.jpeg" class="img-fluid" alt="" />
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-calendar4-week"></i>
                </div>
                <a href="service-details.html" class="stretched-link">
                  <h3>SMKN 10 Semarang Mewakili Kota Semarang Offline Live Audition Pucuk Cool Jam 2024</h3>
                </a>
                <p>Pucuk Cool Jam 2024 bertujuan mendorong generasi muda agar dapat meraih prestasi hingga tingkat
                  internasional</p>
                <a href="service-details.html" class="stretched-link"></a>
              </div>
            </div>
          </div>
          <!-- End Service Item -->

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="700">
            <div class="service-item">
              <div class="img">
                <img src="assets/img/Pres03.jpeg" class="img-fluid" alt="" />
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-easel"></i>
                </div>
                <a href="service-details.html" class="stretched-link">
                  <h3>Ekstrakurikuler Pencak Silat Raih Prestasi di Kejuaraan Semarang Open 2024</h3>
                </a>
                <p>Lailla Falaq Alfajr Wibisono, siswa kelas X TKR 1, berhasil meraih Juara 3 pada kategori kelas
                  tanding remaja putri.</p>
              </div>
            </div>
          </div>
          <!-- End Service Item -->
        </div>
      </div>
    </section>
    <!-- /Services Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section dark-background">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Testimonials</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div>
      <!-- End Section Title -->

      <img src="assets/img/testimonials-bg.jpg" class="testimonials-bg" alt="" />

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
              {
                "loop": true,
                "speed": 600,
                "autoplay": {
                  "delay": 5000
                },
                "slidesPerView": "auto",
                "pagination": {
                  "el": ".swiper-pagination",
                  "type": "bullets",
                  "clickable": true
                }
              }
            </script>
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="" />
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
                <div class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus.
                    Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div>
            <!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="" />
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
                <div class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram
                    malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div>
            <!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="" />
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
                <div class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis
                    minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div>
            <!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="" />
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
                <div class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim
                    velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum
                    veniam.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div>
            <!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="" />
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
                <div class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim
                    culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum
                    quid.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div>
            <!-- End testimonial item -->
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </section>
    <!-- /Testimonials Section -->



    <!-- Faq Section -->
    <section id="faq" class="faq section">
      <div class="container-fluid">
        <div class="row gy-4">
          <div class="col-lg-7 d-flex flex-column justify-content-center order-2 order-lg-1">
            <div class="content px-xl-5" data-aos="fade-up" data-aos-delay="100">
              <h3><span>Frequently Asked </span><strong>Questions</strong></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Duis aute irure dolor in reprehenderit</p>
            </div>

            <div class="faq-container px-xl-5" data-aos="fade-up" data-aos-delay="200">
              <div class="faq-item faq-active">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>Non consectetur a erat nam at lectus urna duis?</h3>
                <div class="faq-content">
                  <p>Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur
                    gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>
              <!-- End Faq item-->

              <div class="faq-item">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?</h3>
                <div class="faq-content">
                  <p>
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id
                    donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque
                    elit ullamcorper
                    dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                  </p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>
              <!-- End Faq item-->

              <div class="faq-item">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>Dolor sit amet consectetur adipiscing elit pellentesque?</h3>
                <div class="faq-content">
                  <p>
                    Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar
                    elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque
                    eu tincidunt. Lectus urna
                    duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                  </p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>
              <!-- End Faq item-->
            </div>
          </div>

          <div class="col-lg-5 order-1 order-lg-2">
            <img src="assets/img/faq.jpg" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="100" />
          </div>
        </div>
      </div>
    </section>
    <!-- /Faq Section -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Portfolio</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div>
      <!-- End Section Title -->

      <div class="container-fluid">
        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-product">Product</li>
            <li data-filter=".filter-branding">Branding</li>
            <li data-filter=".filter-books">Books</li>
          </ul>
          <!-- End Portfolio Filters -->

          <div class="row g-0 isotope-container" data-aos="fade-up" data-aos-delay="200">
            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/p1.jpeg" class="img-fluid" alt="" />
                <div class="portfolio-info">
                  <a href="assets/img/portfolio/p1.jpeg" data-gallery="portfolio-gallery-app"
                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i
                      class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div>
            <!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/c1.jpeg" class="img-fluid" alt="" />
                <div class="portfolio-info">
                  <a href="assets/img/portfolioc/c1.jpeg" data-gallery="portfolio-gallery-product"
                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i
                      class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div>
            <!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/k1.jpeg" class="img-fluid" alt="" />
                <div class="portfolio-info">
                  <a href="assets/img/portfolio/k1.jpeg" data-gallery="portfolio-gallery-branding"
                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i
                      class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div>
            <!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/m1.jpeg" class="img-fluid" alt="" />
                <div class="portfolio-info">
                  <a href="assets/img/portfolio/m1.jpeg" data-gallery="portfolio-gallery-book"
                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i
                      class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div>
            <!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/p2.jpeg" class="img-fluid" alt="" />
                <div class="portfolio-info">
                  <a href="assets/img/portfolio/p2.jpeg" data-gallery="portfolio-gallery-app"
                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i
                      class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div>
            <!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/c2.jpeg" class="img-fluid" alt="" />
                <div class="portfolio-info">
                  <a href="assets/img/portfolio/c2.jpeg" data-gallery="portfolio-gallery-product"
                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i
                      class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div>
            <!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/k2.jpeg" class="img-fluid" alt="" />
                <div class="portfolio-info">
                  <a href="assets/img/portfolio/k2.jpeg" data-gallery="portfolio-gallery-branding"
                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i
                      class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div>
            <!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/m2.jpeg" class="img-fluid" alt="" />
                <div class="portfolio-info">
                  <a href="assets/img/portfolio/m2.jpeg" data-gallery="portfolio-gallery-book"
                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i
                      class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div>
            <!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/p3.jpeg" class="img-fluid" alt="" />
                <div class="portfolio-info">
                  <a href="assets/img/portfolio/p3.jpeg" data-gallery="portfolio-gallery-app"
                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i
                      class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div>
            <!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/c3.jpeg" class="img-fluid" alt="" />
                <div class="portfolio-info">
                  <a href="assets/img/portfolio/c3.jpeg" data-gallery="portfolio-gallery-product"
                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i
                      class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div>
            <!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/k3.jpeg" class="img-fluid" alt="" />
                <div class="portfolio-info">
                  <a href="assets/img/portfolio/k3.jpeg" data-gallery="portfolio-gallery-branding"
                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i
                      class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div>
            <!-- End Portfolio Item -->

            <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/m3.jpeg" class="img-fluid" alt="" />
                <div class="portfolio-info">
                  <a href="assets/img/portfolio/m3.jpe  g" data-gallery="portfolio-gallery-book"
                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i
                      class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div>
            <!-- End Portfolio Item -->
          </div>
          <!-- End Portfolio Container -->
        </div>
      </div>
    </section>
    <!-- /Portfolio Section -->

    <!-- Team Section -->
    <section id="team" class="team section">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Our Team</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div>
      <!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-5">
          <div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="200">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="" />
              </div>
              <div class="member-info">
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
              </div>
            </div>
          </div>
          <!-- End Team Member -->

          <div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="400">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="" />
              </div>
              <div class="member-info">
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
                <h4>Sarah Jhonson</h4>
                <span>Product Manager</span>
              </div>
            </div>
          </div>
          <!-- End Team Member -->

          <div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="600">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="" />
              </div>
              <div class="member-info">
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
                <h4>William Anderson</h4>
                <span>CTO</span>
              </div>
            </div>
          </div>
          <!-- End Team Member -->
        </div>
      </div>
    </section>
    <!-- /Team Section -->

    <!-- Recent Posts Section -->
    <section id="recent-posts" class="recent-posts section">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Recent Blog Posts</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div>
      <!-- End Section Title -->

      <div class="container">
        <div class="row gy-4">
          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <article>
              <div class="post-img">
                <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid" />
              </div>

              <p class="post-category">Politics</p>

              <h2 class="title">
                <a href="blog-details.html">Dolorum optio tempore voluptas dignissimos</a>
              </h2>

              <div class="d-flex align-items-center">
                <img src="assets/img/blog/blog-author.jpg" alt="" class="img-fluid post-author-img flex-shrink-0" />
                <div class="post-meta">
                  <p class="post-author">Maria Doe</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Jan 1, 2022</time>
                  </p>
                </div>
              </div>
            </article>
          </div>
          <!-- End post list item -->

          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <article>
              <div class="post-img">
                <img src="assets/img/blog/blog-2.jpg" alt="" class="img-fluid" />
              </div>

              <p class="post-category">Sports</p>

              <h2 class="title">
                <a href="blog-details.html">Nisi magni odit consequatur autem nulla dolorem</a>
              </h2>

              <div class="d-flex align-items-center">
                <img src="assets/img/blog/blog-author-2.jpg" alt="" class="img-fluid post-author-img flex-shrink-0" />
                <div class="post-meta">
                  <p class="post-author">Allisa Mayer</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Jun 5, 2022</time>
                  </p>
                </div>
              </div>
            </article>
          </div>
          <!-- End post list item -->

          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <article>
              <div class="post-img">
                <img src="assets/img/blog/blog-3.jpg" alt="" class="img-fluid" />
              </div>

              <p class="post-category">Entertainment</p>

              <h2 class="title">
                <a href="blog-details.html">Possimus soluta ut id suscipit ea ut in quo quia et soluta</a>
              </h2>

              <div class="d-flex align-items-center">
                <img src="assets/img/blog/blog-author-3.jpg" alt="" class="img-fluid post-author-img flex-shrink-0" />
                <div class="post-meta">
                  <p class="post-author">Mark Dower</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Jun 22, 2022</time>
                  </p>
                </div>
              </div>
            </article>
          </div>
          <!-- End post list item -->
        </div>
        <!-- End recent posts list -->
      </div>
    </section>
    <!-- /Recent Posts Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Kontak </h2>
        <p>Hubungi kami dengan mengisi formulis dibawah atau bisa melalui nomor dan media sosial yang kami sertakan
          dibawah</p>
      </div>
      <!-- End Section Title -->

      <!-- <div class="mb-5">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3088.8769672544213!2d110.39943937371162!3d-6.966418868207724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70f4c8081bffaf%3A0xbb522f8061199b3!2sSMK%20Negeri%2010%20Semarang!5e1!3m2!1sid!2sid!4v1737203366403!5m2!1sid!2sid"
          width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div> -->
      <!-- End Google Maps -->

      <div class="container" data-aos="fade">
        <div class="row gy-9 gx-lg-9">
          <div class="col-lg-4">
            <div class="info">
              <h3>Hubungi Kami</h3>
              <p>Kami senang mendengar dari Anda! Jika Anda memiliki pertanyaan, masukan, atau memerlukan informasi
                lebih lanjut, silakan gunakan salah satu cara di bawah ini untuk menghubungi kami:</p>

              <div class="info-item d-flex">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h4>Location:</h4>
                  <p>Jl. Kokrosono No.75, Panggung Kidul, Kec. Semarang Utara, Kota Semarang</p>
                </div>
              </div>
              <!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h4>Email:</h4>
                  <p>smk10smg@yahoo.co.id</p>
                </div>
              </div>
              <!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-phone flex-shrink-0"></i>
                <div>
                  <h4>Call:</h4>
                  <p>(024) 3515701</p>
                </div>
              </div>
              <!-- End Info Item -->
            </div>
          </div>

          <div class="col-lg-8">
            <div class="mb-5">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3088.8769672544213!2d110.39943937371162!3d-6.966418868207724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70f4c8081bffaf%3A0xbb522f8061199b3!2sSMK%20Negeri%2010%20Semarang!5e1!3m2!1sid!2sid!4v1737203366403!5m2!1sid!2sid"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <!-- <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required="" />
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                    required="" />
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required="" />
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" placeholder="Message" required=""></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form> -->
          </div>
          <!-- End Contact Form -->
        </div>
      </div>
    </section>
    <!-- /Contact Section -->
  </main>

  <footer id="footer" class="footer dark-background">
    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-4 col-md-6 footer-about">
            <a href="index.html" class="logo d-flex align-items-center">
              <span class="sitename">PPLG</span>
            </a>
            <div class="footer-contact pt-3">
              <p>SMK Negeri 10 Semarang</p>
              <p>Jl. Kokrosono No.75, Panggung Kidul, Kec. Semarang Utara, Kota Semarang, Jawa Tengah 50178</p>
              <p class="mt-3"><strong>Phone:</strong> <span>+62 857 9607 2571</span></p>
              <p><strong>Email:</strong> <span>joel.asmoro@gmail.com</span></p>
            </div>
          </div>

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">About us</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Terms of service</a></li>
              <li><a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><a href="#">Web Design</a></li>
              <li><a href="#">Web Development</a></li>
              <li><a href="#">Product Management</a></li>
              <li><a href="#">Marketing</a></li>
              <li><a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Hic solutasetp</h4>
            <ul>
              <li><a href="#">Molestiae accusamus iure</a></li>
              <li><a href="#">Excepturi dignissimos</a></li>
              <li><a href="#">Suscipit distinctio</a></li>
              <li><a href="#">Dilecta</a></li>
              <li><a href="#">Sit quas consectetur</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Nobis illum</h4>
            <ul>
              <li><a href="#">Ipsam</a></li>
              <li><a href="#">Laudantium dolorum</a></li>
              <li><a href="#">Dinera</a></li>
              <li><a href="#">Trodelas</a></li>
              <li><a href="#">Flexo</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="copyright text-center">
      <div
        class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">
        <div class="d-flex flex-column align-items-center align-items-lg-start">
          <div>
            © Copyright <strong><span>MyWebsite</strong>. All Rights Reserved
          </div>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/herobiz-bootstrap-business-template/ -->
            Designed by <a href="">@joelnissi.aa</a>
          </div>
        </div>

        <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
          <a href=""><i class="bi bi-twitter-x"></i></a>
          <a href=""><i class="bi bi-facebook"></i></a>
          <a href=""><i class="bi bi-instagram"></i></a>
          <a href=""><i class="bi bi-linkedin"></i></a>
        </div>
      </div>
    </div>
  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>
</body>

</html>