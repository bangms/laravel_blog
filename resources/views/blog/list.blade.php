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
    a {
    text-decoration: none;
  }

  h1 {
    font-family: "Open Sans", sans-serif;
    font-weight: 300;
  }

  .row {
    max-width: 900px;
    margin: 50px auto 0;
  }

  .card {
    float: left;
    padding: 0 1.7rem;
    width: 50%;
    margin-bottom: 3.4em;
  }
  .card .menu-content {
    margin: 0;
    padding: 0;
    list-style-type: none;
  }
  .card .menu-content::before, .card .menu-content::after {
    content: "";
    display: table;
  }
  .card .menu-content::after {
    clear: both;
  }
  .card .menu-content li {
    display: inline-block;
  }
  .card .menu-content a {
    color: #fff;
  }
  .card .menu-content span {
    position: absolute;
    left: 50%;
    top: 0;
    font-size: 10px;
    font-weight: 700;
    font-family: "Open Sans";
    transform: translate(-50%, 0);
  }
  .card .wrapper {
    min-height: 250px;
    position: relative;
    overflow: hidden;
    box-shadow: 0 19px 38px rgba(0, 0, 0, 0.3), 0 15px 12px rgba(0, 0, 0, 0.2);
  }
  .card .wrapper:hover .data {
    transform: translateY(0);
  }
  .card .data {
    position: absolute;
    bottom: 1.7em;
    width: 100%;
    transform: translateY(calc(70px + 1em));
    transition: transform 0.3s;
  }
  .card .data .content {
    padding: 1em;
    position: relative;
    z-index: 1;
  }
  .card .author {
    font-size: 12px;
  }
  .card .title {
    margin-top: 10px;
  }
  .card .text {
    height: 70px;
    margin: 0;
  }
  .card input[type=checkbox] {
    display: none;
  }
  .card input[type=checkbox]:checked + .menu-content {
    transform: translateY(-60px);
  }
  .post .wrapper:hover .menu-content span {
    transform: translate(-50%, -10px);
    opacity: 1;
  }
  .post .header {
    color: #fff;
    padding: 1em;
  }
  .post .header::before, .post .header::after {
    content: "";
    display: table;
  }
  .post .header::after {
    clear: both;
  }
  .post .header .date {
    float: left;
    font-size: 12px;
  }
  .post .menu-content {
    float: right;
  }
  .post .menu-content li {
    margin: 0 5px;
    position: relative;
  }
  .post .menu-content span {
    transition: all 0.3s;
    opacity: 0;
  }
  .post .data {
    color: #fff;
    transform: translateY(calc(70px + 4em));
  }
  .post .title {
    padding-bottom: 10px;
  }
  .post .title a {
    color: #fff;
  }
  .post .button {
    display: block;
    width: 100px;
    margin: 0 auto;
    text-align: center;
    font-size: 12px;
    color: #fff;
    line-height: 1;
    position: relative;
    font-weight: 700;
  }
  .post .button::after {
    content: "→";
    opacity: 0;
    position: absolute;
    right: 0;
    top: 50%;
    transform: translate(0, -50%);
    transition: all 0.3s;
  }
  .post .button:hover::after {
    transform: translate(5px, -50%);
    opacity: 1;
  }
  .container {
    margin-top: 200px;
  }
  .btn {
    width: 100%;
    text-align: center;
    padding: 3em;
  }
  .btn a {
    color: #f6f4e6;
    width: 200px;
    text-decoration: none;
    font-size: 1.5em;
    text-transform: uppercase;
    font-weight: 500;
    padding: 10px;
    width: 80px;
    -webkit-transition: all 0.2s ease-in-out;
    transition: all 0.2s ease-in-out;
  }
</style>
@extends('layouts.menu')

  <div class="container">
    @foreach ($postList as $post)
      <div class="post card">
        <div class="wrapper">
          <div class="header">
            <div class="date">
              <span class="day">{{ $post->created_at }}</span>
              <span class="month"></span>
              <span class="year"></span>
            </div>
            <ul class="menu-content">
              <li>
                <a href="#" class="fa fa-bookmark-o"></a>
              </li>
              <li><a href="#" class="fa fa-heart-o"><span>18</span></a></li>
              <li><a href="#" class="fa fa-comment-o"><span>3</span></a></li>
            </ul>
          </div>
          <div class="data">
            <div class="content">
              <span class="author">Jane Doe</span>
              <h1 class="title"><a href="#">{{ $post->subject }}</a></h1>
              <p class="text">{{ $post->content }}</p>
              <a href="/blogs/{{ $post->id }}" class="button">Read more</a>
            </div>
          </div>
        </div>
      </div>
      {{-- {{ $postList->links() }} --}}
      @endforeach
    <div class="btn">
      <a href="/blog/board/">Write</a>
      <a href="/blog/board/">MyBlog</a>
    </div>
  </div>

  
</body>
</html>