<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
</head>
<style>
    @import url(https://fonts.googleapis.com/css?family=Roboto:400,500,700);
  @import url(https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic);
  * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
  }

  body {
    background: #323c41;
  }

  .blog-card {
    width: 350px;
    height: 500px;
    position: absolute;
    top: 50%;
    left: 50%;
    margin: -250px 0 0 -175px;
    overflow: hidden;
    border-radius: 10px;
    box-shadow: 3px 3px 20px rgba(0, 0, 0, 0.5);
    text-align: center;
  }
  .blog-card.spring-fever {
    background: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/1765/bg-blog-card.jpg) no-repeat;
  }
  .blog-card .color-overlay {
    /* Rectangle 11: */
    background: rgba(84, 104, 110, 0.4);
    width: 350px;
    height: 500px;
    position: absolute;
    z-index: 10;
    top: 0;
    left: 0;
    transition: background 0.3s cubic-bezier(0.33, 0.66, 0.66, 1);
  }
  .blog-card .gradient-overlay {
    /* bg-gradient: */
    background-image: -webkit-linear-gradient(rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.6) 21%);
    background-image: -moz-linear-gradient(rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.6) 21%);
    background-image: -o-linear-gradient(rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.6) 21%);
    background-image: linear-gradient(rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.6) 21%);
    width: 350px;
    height: 500px;
    position: absolute;
    top: 350px;
    left: 0;
    z-index: 15;
  }
  .blog-card:hover .card-info {
    opacity: 1;
    bottom: 120px;
  }
  .blog-card:hover .color-overlay {
    background: rgba(84, 104, 110, 0.8);
  }

  .title-content {
    text-align: center;
    margin: 70px 0 0 0;
    position: absolute;
    z-index: 20;
    width: 100%;
    top: 0;
    left: 0;
  }

  h3 {
    font-size: 20px;
    font-weight: 500;
    letter-spacing: 2px;
    color: #9CC9E3;
    font-family: "Roboto", sans-serif;
    margin-bottom: 0;
  }

  hr {
    width: 50px;
    height: 3px;
    margin: 20px auto;
    border: 0;
    background: #D0BB57;
  }

  .intro {
    width: 170px;
    margin: 0 auto;
    color: #DCE3E7;
    font-family: "Droid Serif", serif;
    font-size: 13px;
    font-style: italic;
    line-height: 18px;
  }

  .card-info {
    width: 100%;
    position: absolute;
    bottom: 100px;
    left: 0;
    margin: 0 auto;
    padding: 0 50px;
    color: #DCE3E7;
    font-family: "Droid Serif", serif;
    font-style: 16px;
    line-height: 24px;
    z-index: 20;
    opacity: 0;
    transition: bottom 0.3s, opacity 0.3s cubic-bezier(0.33, 0.66, 0.66, 1);
  }

  .utility-info {
    position: absolute;
    bottom: 0px;
    left: 0;
    z-index: 20;
  }

  .utility-list {
    list-style-type: none;
    margin: 0 0 30px 20px;
    padding: 0;
    width: 100%;
  }
  .utility-list li {
    margin: 0 15px 0 0;
    padding: 0 0 0 22px;
    display: inline-block;
    color: #DCE3E7;
    font-family: "Roboto", sans-serif;
  }
  .utility-list li.comments {
    background: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/1765/icon-chat.svg) no-repeat 0 0.1em;
  }
  .utility-list li.date {
    background: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/1765/icon-calendar.svg) no-repeat 0 0.1em;
  }
  .btn {
    width: 300px;
    text-align:center;
    position:absolute;
    bottom: 8%;
    left: 50%;
    margin-left:-150px;
  }
  .btn a {
    width: 100px;
    color: #f6f4e6;
    text-decoration: none;
    font-size: 1.2em;
    text-transform: uppercase;
    font-weight: 500;
    display: inline-block;
    width: 80px;
    text-align: center;
    -webkit-transition: all 0.2s ease-in-out;
    transition: all 0.2s ease-in-out;
  }
  .btn a:hover {
    color:#fddb3a;
  }
</style>
@extends('layouts.menu')

  <div class="blog-card spring-fever">
    <div class="title-content">
      <h3>SPRING FEVER</h3>
      <hr />
      <div class="intro">Yllamco laboris nisi ut aliquip ex ea commodo.</div>
    </div><!-- /.title-content -->
    <div class="card-info">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim. 
    </div><!-- /.card-info -->
    <div class="utility-info">
      <ul class="utility-list">
        <li class="comments">12</li>
        <li class="date">03.12.2015</li>
      </ul>
    </div><!-- /.utility-info -->
    <!-- overlays -->
    <div class="gradient-overlay"></div>
    <div class="color-overlay"></div>
  </div><!-- /.blog-card -->
  <div class="btn">
    <a href="/blog/board/">Write</a>
    <a href="/blog/board/">MyBlog</a>
  </div>
</body>
</html>