@extends('layouts.admin')

@section('styles')
{{-- <script type="text/javascript" src="/js/jquery.min.js"></script> --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
@endsection

@section('content')
<style>
  .section-container {
    display: flex;
    align-items: center;
    background: #f9f9f9;
    border: solid 1px #e8e9eb;
    cursor: pointer;
    height: auto;
    margin-top: 3px;
    padding: 10px 30px 10px 22px;
  }

</style>
<div class="ud-component--clp--curriculum" ng-non-bindable=""><span style="font-size: 0px;"></span>
  <div class="curriculum-header-container">
    <div class="header-left">
      <div class="curriculum-header-title" data-purpose="curriculum-title">Course content</div>
    </div>
    <div class="header-right" data-purpose="curriculum-content-summary"><span><a class="sections-toggle" data-purpose="toggle-all-sections" href="javascript:void(0)">Expand all</a> <span class="dib">71 lectures</span></span><span class="curriculum-header-length">14:15:38</span></div>
  </div>
  <div><a class="section-container section-container--expanded" data-purpose="toggle-section" href="javascript:void(0)">
      <div class="section-header-left"><span class="section-title-wrapper"><span class="section-title-toggle"><span class="section-title-toggle-plus">+</span><span class="section-title-toggle-minus">–</span></span><span class="section-title-text">Introduction</span></span></div>
      <div class="section-header-right"><span class="num-items-in-section" data-purpose="num-items-in-section">3 lectures</span><span class="section-header-length">13:33</span></div>
    </a>
    <div class="lectures-container collapse in" style="">
      <div class="lecture-container lecture-container--preview" data-purpose="lecture-item-1-1">
        <div class="left-content"><span class="udi udi-play-circle"></span>
          <div class="top">
            <div class="title"><a href="javascript:void(0)">Introduction</a> </div>
          </div>
        </div>
        <div class="details"><a data-purpose="preview-course" href="javascript:void(0)"><span class="preview-text">Preview</span></a><span class="content-summary">09:59</span></div>
      </div>
      <div class="lecture-container lecture-container--preview" data-purpose="lecture-item-1-2">
        <div class="left-content"><span class="udi udi-play-circle"></span>
          <div class="top">
            <div class="title"><a href="javascript:void(0)">project overview</a> </div>
          </div>
        </div>
        <div class="details"><a data-purpose="preview-course" href="javascript:void(0)"><span class="preview-text">Preview</span></a><span class="content-summary">03:28</span></div>
      </div>
      <div class="lecture-container" data-purpose="lecture-item-1-3">
        <div class="left-content"><span class="udi udi-file-o"></span>
          <div class="top">
            <div class="title">complete code used in this project </div>
          </div>
        </div>
        <div class="details"><span class="content-summary">00:06</span></div>
      </div>
    </div>
  </div>
  <div><a class="section-container" data-purpose="toggle-section" href="javascript:void(0)">
      <div class="section-header-left"><span class="section-title-wrapper"><span class="section-title-toggle"><span class="section-title-toggle-plus">+</span><span class="section-title-toggle-minus">–</span></span><span class="section-title-text">Installing React Native</span></span></div>
      <div class="section-header-right"><span class="num-items-in-section" data-purpose="num-items-in-section">2 lectures</span><span class="section-header-length">24:16</span></div>
    </a>
    <div class="lectures-container collapse" style="height: 0px;">
      <div class="lecture-container" data-purpose="lecture-item-2-1">
        <div class="left-content"><span class="udi udi-play-circle"></span>
          <div class="top">
            <div class="title">Installing React Native using expo </div>
          </div>
        </div>
        <div class="details"><span class="content-summary">09:16</span></div>
      </div>
      <div class="lecture-container" data-purpose="lecture-item-2-2">
        <div class="left-content"><span class="udi udi-play-circle"></span>
          <div class="top">
            <div class="title">Understanding Code </div>
          </div>
        </div>
        <div class="details"><span class="content-summary">15:00</span></div>
      </div>
    </div>
  </div>
  <div><a class="section-container" data-purpose="toggle-section" href="javascript:void(0)">
      <div class="section-header-left"><span class="section-title-wrapper"><span class="section-title-toggle"><span class="section-title-toggle-plus">+</span><span class="section-title-toggle-minus">–</span></span><span class="section-title-text">Creating beautiful UI for screens</span></span></div>
      <div class="section-header-right"><span class="num-items-in-section" data-purpose="num-items-in-section">7 lectures</span><span class="section-header-length">01:39:58</span></div>
    </a>
    <div class="lectures-container collapse">
      <div class="lecture-container" data-purpose="lecture-item-3-1">
        <div class="left-content"><span class="udi udi-play-circle"></span>
          <div class="top">
            <div class="title">Designing Home Screen part 1 </div>
          </div>
        </div>
        <div class="details"><span class="content-summary">16:02</span></div>
      </div>
      <div class="lecture-container" data-purpose="lecture-item-3-2">
        <div class="left-content"><span class="udi udi-play-circle"></span>
          <div class="top">
            <div class="title">Designing Home Screen part 2 and Flatlist </div>
          </div>
        </div>
        <div class="details"><span class="content-summary">13:47</span></div>
      </div>
      <div class="lecture-container" data-purpose="lecture-item-3-3">
        <div class="left-content"><span class="udi udi-play-circle"></span>
          <div class="top">
            <div class="title">Designing CreateEmployee Screen </div>
          </div>
        </div>
        <div class="details"><span class="content-summary">15:36</span></div>
      </div>
      <div class="lecture-container" data-purpose="lecture-item-3-4">
        <div class="left-content"><span class="udi udi-play-circle"></span>
          <div class="top">
            <div class="title">Adding Modal (popup) </div>
          </div>
        </div>
        <div class="details"><span class="content-summary">17:19</span></div>
      </div>
      <div class="lecture-container" data-purpose="lecture-item-3-5">
        <div class="left-content"><span class="udi udi-play-circle"></span>
          <div class="top">
            <div class="title">Designing Profile Screen part 1 </div>
          </div>
        </div>
        <div class="details"><span class="content-summary">11:36</span></div>
      </div>
      <div class="lecture-container" data-purpose="lecture-item-3-6">
        <div class="left-content"><span class="udi udi-play-circle"></span>
          <div class="top">
            <div class="title">Designing Profile Screen part 2 </div>
          </div>
        </div>
        <div class="details"><span class="content-summary">18:23</span></div>
      </div>
      <div class="lecture-container" data-purpose="lecture-item-3-7">
        <div class="left-content"><span class="udi udi-play-circle"></span>
          <div class="top">
            <div class="title">opening email app and Dialer App </div>
          </div>
        </div>
        <div class="details"><span class="content-summary">07:15</span></div>
      </div>
    </div>
  </div>
  <div><a class="section-container" data-purpose="toggle-section" href="javascript:void(0)">
      <div class="section-header-left"><span class="section-title-wrapper"><span class="section-title-toggle"><span class="section-title-toggle-plus">+</span><span class="section-title-toggle-minus">–</span></span><span class="section-title-text">Adding React Navigation v5</span></span></div>
      <div class="section-header-right"><span class="num-items-in-section" data-purpose="num-items-in-section">3 lectures</span><span class="section-header-length">29:13</span></div>
    </a>
    <div class="lectures-container collapse">
      <div class="lecture-container" data-purpose="lecture-item-4-1">
        <div class="left-content"><span class="udi udi-play-circle"></span>
          <div class="top">
            <div class="title">Installing and adding Navigation </div>
          </div>
        </div>
        <div class="details"><span class="content-summary">11:21</span></div>
      </div>
      <div class="lecture-container lecture-container--preview" data-purpose="lecture-item-4-2">
        <div class="left-content"><span class="udi udi-play-circle"></span>
          <div class="top">
            <div class="title"><a href="javascript:void(0)">Customizing Header</a> </div>
          </div>
        </div>
        <div class="details"><a data-purpose="preview-course" href="javascript:void(0)"><span class="preview-text">Preview</span></a><span class="content-summary">08:16</span></div>
      </div>
      <div class="lecture-container" data-purpose="lecture-item-4-3">
        <div class="left-content"><span class="udi udi-play-circle"></span>
          <div class="top">
            <div class="title">Making Profile screen dynamic </div>
          </div>
        </div>
        <div class="details"><span class="content-summary">09:36</span></div>
      </div>
    </div>
  </div>
  <div><a class="section-container" data-purpose="toggle-section" href="javascript:void(0)">
      <div class="section-header-left"><span class="section-title-wrapper"><span class="section-title-toggle"><span class="section-title-toggle-plus">+</span><span class="section-title-toggle-minus">–</span></span><span class="section-title-text">Accessing Camera,Image Gallery and uploading Images</span></span></div>
      <div class="section-header-right"><span class="num-items-in-section" data-purpose="num-items-in-section">2 lectures</span><span class="section-header-length">29:10</span></div>
    </a>
    <div class="lectures-container collapse">
      <div class="lecture-container" data-purpose="lecture-item-5-1">
        <div class="left-content"><span class="udi udi-play-circle"></span>
          <div class="top">
            <div class="title">access camera and image gallery </div>
          </div>
        </div>
        <div class="details"><span class="content-summary">10:58</span></div>
      </div>
      <div class="lecture-container" data-purpose="lecture-item-5-2">
        <div class="left-content"><span class="udi udi-play-circle"></span>
          <div class="top">
            <div class="title">uploading images to Cloudinary </div>
          </div>
        </div>
        <div class="details"><span class="content-summary">18:12</span></div>
      </div>
    </div>
  </div>
  <div><a class="section-container" data-purpose="toggle-section" href="javascript:void(0)">
      <div class="section-header-left"><span class="section-title-wrapper"><span class="section-title-toggle"><span class="section-title-toggle-plus">+</span><span class="section-title-toggle-minus">–</span></span><span class="section-title-text">working on backend of application</span></span></div>
      <div class="section-header-right"><span class="num-items-in-section" data-purpose="num-items-in-section">4 lectures</span><span class="section-header-length">44:40</span></div>
    </a>
    <div class="lectures-container collapse">
      <div class="lecture-container" data-purpose="lecture-item-6-1">
        <div class="left-content"><span class="udi udi-play-circle"></span>
          <div class="top">
            <div class="title">setting up node js and mongodb </div>
          </div>
        </div>
        <div class="details"><span class="content-summary">09:51</span></div>
      </div>
      <div class="lecture-container" data-purpose="lecture-item-6-2">
        <div class="left-content"><span class="udi udi-play-circle"></span>
          <div class="top">
            <div class="title">making Schema and connecting to mongodb </div>
          </div>
        </div>
        <div class="details"><span class="content-summary">06:36</span></div>
      </div>
      <div class="lecture-container" data-purpose="lecture-item-6-3">
        <div class="left-content"><span class="udi udi-play-circle"></span>
          <div class="top">
            <div class="title">making post data route handler </div>
          </div>
        </div>
        <div class="details"><span class="content-summary">10:28</span></div>
      </div>
      <div class="lecture-container" data-purpose="lecture-item-6-4">
        <div class="left-content"><span class="udi udi-play-circle"></span>
          <div class="top">
            <div class="title">making update and delete route handler </div>
          </div>
        </div>
        <div class="details"><span class="content-summary">17:45</span></div>
      </div>
    </div>
  </div>
  <div><a class="section-container" data-purpose="toggle-section" href="javascript:void(0)">
      <div class="section-header-left"><span class="section-title-wrapper"><span class="section-title-toggle"><span class="section-title-toggle-plus">+</span><span class="section-title-toggle-minus">–</span></span><span class="section-title-text">connecting React Native with node js and express backend</span></span></div>
      <div class="section-header-right"><span class="num-items-in-section" data-purpose="num-items-in-section">7 lectures</span><span class="section-header-length">01:13:52</span></div>
    </a>
    <div class="lectures-container collapse">
      <div class="lecture-container" data-purpose="lecture-item-7-1">
        <div class="left-content"><span class="udi udi-play-circle"></span>
          <div class="top">
            <div class="title">why ngrok </div>
          </div>
        </div>
        <div class="details"><span class="content-summary">06:04</span></div>
      </div>
      <div class="lecture-container" data-purpose="lecture-item-7-2">
        <div class="left-content"><span class="udi udi-play-circle"></span>
          <div class="top">
            <div class="title">Posting data from React native </div>
          </div>
        </div>
        <div class="details"><span class="content-summary">14:26</span></div>
      </div>
      <div class="lecture-container" data-purpose="lecture-item-7-3">
        <div class="left-content"><span class="udi udi-play-circle"></span>
          <div class="top">
            <div class="title">fetching records in home Screen </div>
          </div>
        </div>
        <div class="details"><span class="content-summary">16:17</span></div>
      </div>
      <div class="lecture-container" data-purpose="lecture-item-7-4">
        <div class="left-content"><span class="udi udi-play-circle"></span>
          <div class="top">
            <div class="title">Implementing pull to refresh feature </div>
          </div>
        </div>
        <div class="details"><span class="content-summary">08:01</span></div>
      </div>
      <div class="lecture-container" data-purpose="lecture-item-7-5">
        <div class="left-content"><span class="udi udi-play-circle"></span>
          <div class="top">
            <div class="title">deleting employee feature </div>
          </div>
        </div>
        <div class="details"><span class="content-summary">06:24</span></div>
      </div>
      <div class="lecture-container" data-purpose="lecture-item-7-6">
        <div class="left-content"><span class="udi udi-play-circle"></span>
          <div class="top">
            <div class="title">Updating Employee details </div>
          </div>
        </div>
        <div class="details"><span class="content-summary">17:29</span></div>
      </div>
      <div class="lecture-container" data-purpose="lecture-item-7-7">
        <div class="left-content"><span class="udi udi-play-circle"></span>
          <div class="top">
            <div class="title">Adding Keyboard Avoiding View </div>
          </div>
        </div>
        <div class="details"><span class="content-summary">05:11</span></div>
      </div>
    </div>
  </div>
  <div><a class="section-container" data-purpose="toggle-section" href="javascript:void(0)">
      <div class="section-header-left"><span class="section-title-wrapper"><span class="section-title-toggle"><span class="section-title-toggle-plus">+</span><span class="section-title-toggle-minus">–</span></span><span class="section-title-text">Adding Redux for state management</span></span></div>
      <div class="section-header-right"><span class="num-items-in-section" data-purpose="num-items-in-section">2 lectures</span><span class="section-header-length">26:06</span></div>
    </a>
    <div class="lectures-container collapse">
      <div class="lecture-container lecture-container--preview" data-purpose="lecture-item-8-1">
        <div class="left-content"><span class="udi udi-play-circle"></span>
          <div class="top">
            <div class="title"><a href="javascript:void(0)">why we need Redux</a> </div>
          </div>
        </div>
        <div class="details"><a data-purpose="preview-course" href="javascript:void(0)"><span class="preview-text">Preview</span></a><span class="content-summary">04:49</span></div>
      </div>
      <div class="lecture-container lecture-container--preview" data-purpose="lecture-item-8-2">
        <div class="left-content"><span class="udi udi-play-circle"></span>
          <div class="top">
            <div class="title"><a href="javascript:void(0)">Adding Redux in our app</a> </div>
          </div>
        </div>
        <div class="details"><a data-purpose="preview-course" href="javascript:void(0)"><span class="preview-text">Preview</span></a><span class="content-summary">21:17</span></div>
      </div>
    </div>
  </div>
  <div><a class="section-container" data-purpose="toggle-section" href="javascript:void(0)">
      <div class="section-header-left"><span class="section-title-wrapper"><span class="section-title-toggle"><span class="section-title-toggle-plus">+</span><span class="section-title-toggle-minus">–</span></span><span class="section-title-text">Ditching Redux and adding context API</span></span></div>
      <div class="section-header-right"><span class="num-items-in-section" data-purpose="num-items-in-section">1 lecture</span><span class="section-header-length">09:49</span></div>
    </a>
    <div class="lectures-container collapse">
      <div class="lecture-container lecture-container--preview" data-purpose="lecture-item-9-1">
        <div class="left-content"><span class="udi udi-play-circle"></span>
          <div class="top">
            <div class="title"><a href="javascript:void(0)">Adding Context API</a> </div>
          </div>
        </div>
        <div class="details"><a data-purpose="preview-course" href="javascript:void(0)"><span class="preview-text">Preview</span></a><span class="content-summary">09:49</span></div>
      </div>
    </div>
  </div>
  <div><a class="section-container" data-purpose="toggle-section" href="javascript:void(0)">
      <div class="section-header-left"><span class="section-title-wrapper"><span class="section-title-toggle"><span class="section-title-toggle-plus">+</span><span class="section-title-toggle-minus">–</span></span><span class="section-title-text">Youtube clone - Dark theme &amp; redux added</span></span></div>
      <div class="section-header-right"><span class="num-items-in-section" data-purpose="num-items-in-section">16 lectures</span><span class="section-header-length">03:16:35</span></div>
    </a>
    <div class="lectures-container collapse">
      <div class="lecture-container lecture-container--preview" data-purpose="lecture-item-10-1">
        <div class="left-content"><span class="udi udi-play-circle"></span>
          <div class="top">
            <div class="title"><a href="javascript:void(0)">Second App Overview</a> </div>
          </div>
        </div>
        <div class="details"><a data-purpose="preview-course" href="javascript:void(0)"><span class="preview-text">Preview</span></a><span class="content-summary">02:08</span></div>
      </div>
      <div class="lecture-container" data-purpose="lecture-item-10-2">
        <div class="left-content"><span class="udi udi-play-circle"></span>
          <div class="top">
            <div class="title">creating header component </div>
          </div>
        </div>
        <div class="details"><span class="content-summary">21:08</span></div>
      </div>
      <div class="lecture-container" data-purpose="lecture-item-10-3">
        <div class="left-content"><span class="udi udi-play-circle"></span>
          <div class="top">
            <div class="title">creating Home screen Cards </div>
          </div>
        </div>
        <div class="details"><span class="content-summary">17:43</span></div>
      </div>
      <div class="lecture-container" data-purpose="lecture-item-10-4">
        <div class="left-content"><span class="udi udi-play-circle"></span>
          <div class="top">
            <div class="title">creating search screen header </div>
          </div>
        </div>
        <div class="details"><span class="content-summary">12:56</span></div>
      </div>
      <div class="lecture-container" data-purpose="lecture-item-10-5">
        <div class="left-content"><span class="udi udi-play-circle"></span>
          <div class="top">
            <div class="title">creating MiniCard component for search screen </div>
          </div>
        </div>
        <div class="details"><span class="content-summary">09:17</span></div>
      </div>
      <div class="lecture-container" data-purpose="lecture-item-10-6">
        <div class="left-content"><span class="udi udi-play-circle"></span>
          <div class="top">
            <div class="title">making use of youtube API to fetch videos </div>
          </div>
        </div>
        <div class="details"><span class="content-summary">25:17</span></div>
      </div>
      <div class="lecture-container" data-purpose="lecture-item-10-7">
        <div class="left-content"><span class="udi udi-play-circle"></span>
          <div class="top">
            <div class="title">fixing video image issue </div>
          </div>
        </div>
        <div class="details"><span class="content-summary">01:09</span></div>
      </div>
      <div class="lecture-container" data-purpose="lecture-item-10-8">
        <div class="left-content"><span class="udi udi-play-circle"></span>
          <div class="top">
            <div class="title">combining navigators theory and installing navigation v5 </div>
          </div>
        </div>
        <div class="details"><span class="content-summary">03:41</span></div>
      </div>
      <div class="lecture-container" data-purpose="lecture-item-10-9">
        <div class="left-content"><span class="udi udi-play-circle"></span>
          <div class="top">
            <div class="title">Creating screens and combining navigation </div>
          </div>
        </div>
        <div class="details"><span class="content-summary">10:31</span></div>
      </div>
      <div class="lecture-container" data-purpose="lecture-item-10-10">
        <div class="left-content"><span class="udi udi-play-circle"></span>
          <div class="top">
            <div class="title">Adding icons in tabs and wireing up navigation </div>
          </div>
        </div>
        <div class="details"><span class="content-summary">13:15</span></div>
      </div>
      <div class="lecture-container" data-purpose="lecture-item-10-11">
        <div class="left-content"><span class="udi udi-play-circle"></span>
          <div class="top">
            <div class="title">adding redux </div>
          </div>
        </div>
        <div class="details"><span class="content-summary">12:49</span></div>
      </div>
      <div class="lecture-container" data-purpose="lecture-item-10-12">
        <div class="left-content"><span class="udi udi-play-circle"></span>
          <div class="top">
            <div class="title">sharing data with home screen </div>
          </div>
        </div>
        <div class="details"><span class="content-summary">05:22</span></div>
      </div>
      <div class="lecture-container" data-purpose="lecture-item-10-13">
        <div class="left-content"><span class="udi udi-play-circle"></span>
          <div class="top">
            <div class="title">working on Explore Screen tab </div>
          </div>
        </div>
        <div class="details"><span class="content-summary">11:38</span></div>
      </div>
      <div class="lecture-container" data-purpose="lecture-item-10-14">
        <div class="left-content"><span class="udi udi-play-circle"></span>
          <div class="top">
            <div class="title">working on Video Player Screen </div>
          </div>
        </div>
        <div class="details"><span class="content-summary">19:38</span></div>
      </div>
      <div class="lecture-container" data-purpose="lecture-item-10-15">
        <div class="left-content"><span class="udi udi-play-circle"></span>
          <div class="top">
            <div class="title">Adding Dark Theme </div>
          </div>
        </div>
        <div class="details"><span class="content-summary">14:52</span></div>
      </div>
      <div class="lecture-container lecture-container--preview" data-purpose="lecture-item-10-16">
        <div class="left-content"><span class="udi udi-play-circle"></span>
          <div class="top">
            <div class="title"><a href="javascript:void(0)">toggle theme using redux</a> </div>
          </div>
        </div>
        <div class="details"><a data-purpose="preview-course" href="javascript:void(0)"><span class="preview-text">Preview</span></a><span class="content-summary">15:11</span></div>
      </div>
    </div>
  </div>
  <div><a class="section-container" data-purpose="toggle-section" href="javascript:void(0)">
      <div class="section-header-left"><span class="section-title-wrapper"><span class="section-title-toggle"><span class="section-title-toggle-plus">+</span><span class="section-title-toggle-minus">–</span></span><span class="section-title-text">Building app with expo</span></span></div>
      <div class="section-header-right"><span class="num-items-in-section" data-purpose="num-items-in-section">2 lectures</span><span class="section-header-length">23:34</span></div>
    </a>
    <div class="lectures-container collapse">
      <div class="lecture-container" data-purpose="lecture-item-11-1">
        <div class="left-content"><span class="udi udi-play-circle"></span>
          <div class="top">
            <div class="title">creating icon and splash screen </div>
          </div>
        </div>
        <div class="details"><span class="content-summary">09:24</span></div>
      </div>
      <div class="lecture-container" data-purpose="lecture-item-11-2">
        <div class="left-content"><span class="udi udi-play-circle"></span>
          <div class="top">
            <div class="title">building app using expo </div>
          </div>
        </div>
        <div class="details"><span class="content-summary">14:10</span></div>
      </div>
    </div>
  </div>
  <div><a class="section-container" data-purpose="toggle-section" href="javascript:void(0)">
      <div class="section-header-left"><span class="section-title-wrapper"><span class="section-title-toggle"><span class="section-title-toggle-plus">+</span><span class="section-title-toggle-minus">–</span></span><span class="section-title-text">Weather App with autocomplete - using React Native CLI</span></span></div>
      <div class="section-header-right"><span class="num-items-in-section" data-purpose="num-items-in-section">8 lectures</span><span class="section-header-length">01:30:49</span></div>
    </a>
    <div class="lectures-container collapse">
      <div class="lecture-container lecture-container--preview" data-purpose="lecture-item-12-1">
        <div class="left-content"><span class="udi udi-play-circle"></span>
          <div class="top">
            <div class="title"><a href="javascript:void(0)">Third app overview</a> </div>
          </div>
        </div>
        <div class="details"><a data-purpose="preview-course" href="javascript:void(0)"><span class="preview-text">Preview</span></a><span class="content-summary">01:23</span></div>
      </div>
      <div class="lecture-container" data-purpose="lecture-item-12-2">
        <div class="left-content"><span class="udi udi-play-circle"></span>
          <div class="top">
            <div class="title">creating project with React native cli </div>
          </div>
        </div>
        <div class="details"><span class="content-summary">04:14</span></div>
      </div>
      <div class="lecture-container" data-purpose="lecture-item-12-3">
        <div class="left-content"><span class="udi udi-play-circle"></span>
          <div class="top">
            <div class="title">creating header </div>
          </div>
        </div>
        <div class="details"><span class="content-summary">16:36</span></div>
      </div>
      <div class="lecture-container" data-purpose="lecture-item-12-4">
        <div class="left-content"><span class="udi udi-play-circle"></span>
          <div class="top">
            <div class="title">creating search screen with autocomplete </div>
          </div>
        </div>
        <div class="details"><span class="content-summary">14:21</span></div>
      </div>
      <div class="lecture-container" data-purpose="lecture-item-12-5">
        <div class="left-content"><span class="udi udi-play-circle"></span>
          <div class="top">
            <div class="title">working on home screen </div>
          </div>
        </div>
        <div class="details"><span class="content-summary">18:54</span></div>
      </div>
      <div class="lecture-container" data-purpose="lecture-item-12-6">
        <div class="left-content"><span class="udi udi-play-circle"></span>
          <div class="top">
            <div class="title">Adding tab navigation </div>
          </div>
        </div>
        <div class="details"><span class="content-summary">20:56</span></div>
      </div>
      <div class="lecture-container" data-purpose="lecture-item-12-7">
        <div class="left-content"><span class="udi udi-play-circle"></span>
          <div class="top">
            <div class="title">saving data on users device using async storage </div>
          </div>
        </div>
        <div class="details"><span class="content-summary">08:34</span></div>
      </div>
      <div class="lecture-container" data-purpose="lecture-item-12-8">
        <div class="left-content"><span class="udi udi-play-circle"></span>
          <div class="top">
            <div class="title">building app using android studio </div>
          </div>
        </div>
        <div class="details"><span class="content-summary">05:51</span></div>
      </div>
    </div>
  </div>
  <div><a class="section-container" data-purpose="toggle-section" href="javascript:void(0)">
      <div class="section-header-left"><span class="section-title-wrapper"><span class="section-title-toggle"><span class="section-title-toggle-plus">+</span><span class="section-title-toggle-minus">–</span></span><span class="section-title-text">Animations</span></span></div>
      <div class="section-header-right"><span class="num-items-in-section" data-purpose="num-items-in-section">6 lectures</span><span class="section-header-length">01:42:04</span></div>
    </a>
    <div class="lectures-container collapse">
      <div class="lecture-container lecture-container--preview" data-purpose="lecture-item-13-1">
        <div class="left-content"><span class="udi udi-play-circle"></span>
          <div class="top">
            <div class="title"><a href="javascript:void(0)">Animations basics</a> </div>
          </div>
        </div>
        <div class="details"><a data-purpose="preview-course" href="javascript:void(0)"><span class="preview-text">Preview</span></a><span class="content-summary">07:31</span></div>
      </div>
      <div class="lecture-container lecture-container--preview" data-purpose="lecture-item-13-2">
        <div class="left-content"><span class="udi udi-play-circle"></span>
          <div class="top">
            <div class="title"><a href="javascript:void(0)">understanding how interpolate works</a> </div>
          </div>
        </div>
        <div class="details"><a data-purpose="preview-course" href="javascript:void(0)"><span class="preview-text">Preview</span></a><span class="content-summary">05:30</span></div>
      </div>
      <div class="lecture-container" data-purpose="lecture-item-13-3">
        <div class="left-content"><span class="udi udi-play-circle"></span>
          <div class="top">
            <div class="title">handling gestures </div>
          </div>
        </div>
        <div class="details"><span class="content-summary">11:51</span></div>
      </div>
      <div class="lecture-container" data-purpose="lecture-item-13-4">
        <div class="left-content"><span class="udi udi-play-circle"></span>
          <div class="top">
            <div class="title">Animating Header on scroll </div>
          </div>
        </div>
        <div class="details"><span class="content-summary">11:01</span></div>
      </div>
      <div class="lecture-container" data-purpose="lecture-item-13-5">
        <div class="left-content"><span class="udi udi-play-circle"></span>
          <div class="top">
            <div class="title">Instagram heart bounce animation </div>
          </div>
        </div>
        <div class="details"><span class="content-summary">28:24</span></div>
      </div>
      <div class="lecture-container" data-purpose="lecture-item-13-6">
        <div class="left-content"><span class="udi udi-play-circle"></span>
          <div class="top">
            <div class="title">Translating and rotating cards </div>
          </div>
        </div>
        <div class="details"><span class="content-summary">37:47</span></div>
      </div>
    </div>
  </div>
  <div><a class="section-container" data-purpose="toggle-section" href="javascript:void(0)">
      <div class="section-header-left"><span class="section-title-wrapper"><span class="section-title-toggle"><span class="section-title-toggle-plus">+</span><span class="section-title-toggle-minus">–</span></span><span class="section-title-text">Context API MASTERY</span></span></div>
      <div class="section-header-right"><span class="num-items-in-section" data-purpose="num-items-in-section">8 lectures</span><span class="section-header-length">01:31:59</span></div>
    </a>
    <div class="lectures-container collapse">
      <div class="lecture-container lecture-container--preview" data-purpose="lecture-item-14-1">
        <div class="left-content"><span class="udi udi-play-circle"></span>
          <div class="top">
            <div class="title"><a href="javascript:void(0)">Fourth App overview</a> </div>
          </div>
        </div>
        <div class="details"><a data-purpose="preview-course" href="javascript:void(0)"><span class="preview-text">Preview</span></a><span class="content-summary">01:46</span></div>
      </div>
      <div class="lecture-container" data-purpose="lecture-item-14-2">
        <div class="left-content"><span class="udi udi-play-circle"></span>
          <div class="top">
            <div class="title">creating context and using it </div>
          </div>
        </div>
        <div class="details"><span class="content-summary">13:40</span></div>
      </div>
      <div class="lecture-container" data-purpose="lecture-item-14-3">
        <div class="left-content"><span class="udi udi-play-circle"></span>
          <div class="top">
            <div class="title">adding reducer </div>
          </div>
        </div>
        <div class="details"><span class="content-summary">24:15</span></div>
      </div>
      <div class="lecture-container" data-purpose="lecture-item-14-4">
        <div class="left-content"><span class="udi udi-play-circle"></span>
          <div class="top">
            <div class="title">deleting record </div>
          </div>
        </div>
        <div class="details"><span class="content-summary">05:37</span></div>
      </div>
      <div class="lecture-container" data-purpose="lecture-item-14-5">
        <div class="left-content"><span class="udi udi-play-circle"></span>
          <div class="top">
            <div class="title">working on create notes screen </div>
          </div>
        </div>
        <div class="details"><span class="content-summary">17:33</span></div>
      </div>
      <div class="lecture-container" data-purpose="lecture-item-14-6">
        <div class="left-content"><span class="udi udi-play-circle"></span>
          <div class="top">
            <div class="title">working on show notes screen </div>
          </div>
        </div>
        <div class="details"><span class="content-summary">10:18</span></div>
      </div>
      <div class="lecture-container" data-purpose="lecture-item-14-7">
        <div class="left-content"><span class="udi udi-play-circle"></span>
          <div class="top">
            <div class="title">pre populating fields in edit screen </div>
          </div>
        </div>
        <div class="details"><span class="content-summary">11:39</span></div>
      </div>
      <div class="lecture-container" data-purpose="lecture-item-14-8">
        <div class="left-content"><span class="udi udi-play-circle"></span>
          <div class="top">
            <div class="title">handling update action </div>
          </div>
        </div>
        <div class="details"><span class="content-summary">07:11</span></div>
      </div>
    </div>
  </div>
</div>
@endsection
