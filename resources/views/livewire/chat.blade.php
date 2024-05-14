@extends('templates.auth')

@section('title', 'NUTRICARE - BEM VINDO')


@section('left-menu')
    @include('templates.layout.parts.left-menu')
@endsection

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="chat-wrapper d-lg-flex gap-1 mx-n4 mt-n4 p-1">
                <div class="chat-leftsidebar">
                    <div class="px-4 pt-4 mb-3">
                        <div class="d-flex align-items-start">
                            <div class="flex-grow-1">
                                <h5 class="mb-4">Chat</h5>
                            </div>

                        </div>
                        <div class="search-box">
                            <input type="text" class="form-control bg-light border-light" placeholder="Search here...">
                            <i class="ri-search-2-line search-icon"></i>
                        </div>

                    </div> <!-- .p-4 -->

                    <ul class="nav nav-tabs nav-tabs-custom nav-success nav-justified" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" data-bs-toggle="tab" href="#chats" role="tab"
                                aria-selected="true">
                                Chat
                            </a>
                        </li>

                    </ul>

                    <div class="tab-content text-muted">
                        <div class="tab-pane active show" id="chats" role="tabpanel">
                            <div class="chat-room-list pt-3 simplebar-scrollable-y" data-simplebar="init">
                                <div class="simplebar-wrapper" style="margin: -16px 0px 0px;">
                                    <div class="simplebar-height-auto-observer-wrapper">
                                        <div class="simplebar-height-auto-observer"></div>
                                    </div>
                                    <div class="simplebar-mask">
                                        <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                            <div class="simplebar-content-wrapper" tabindex="0" role="region"
                                                aria-label="scrollable content"
                                                style="height: auto; overflow: hidden scroll;">
                                                <div class="simplebar-content" style="padding: 16px 0px 0px;">
                                                    <div class="d-flex align-items-center px-4 mb-2">
                                                        <div class="flex-grow-1">
                                                            <h4 class="mb-0 fs-11 text-muted text-uppercase">Online
                                                            </h4>
                                                        </div>

                                                    </div>

                                                    <div class="chat-message-list">

                                                        <ul class="list-unstyled chat-list chat-user-list" id="userList">

                                                            <li id="contact-id-1" data-name="direct-message" class="active">
                                                                <a href="javascript: void(0);">
                                                                    <div class="d-flex align-items-center">
                                                                        <div
                                                                            class="flex-shrink-0 chat-user-img online align-self-center me-2 ms-0">
                                                                            <div class="avatar-xxs"> <img
                                                                                    src="assets/images/users/avatar-2.jpg"
                                                                                    class="rounded-circle img-fluid userprofile"
                                                                                    alt=""><span
                                                                                    class="user-status"></span> </div>
                                                                        </div>
                                                                        <div class="flex-grow-1 overflow-hidden">
                                                                            <p class="text-truncate mb-0">Lisa Parker</p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </li>

                                                            <li id="contact-id-2" data-name="direct-message" class="">
                                                                <a href="javascript: void(0);" class="unread-msg-user">
                                                                    <div class="d-flex align-items-center">
                                                                        <div
                                                                            class="flex-shrink-0 chat-user-img online align-self-center me-2 ms-0">
                                                                            <div class="avatar-xxs"> <img
                                                                                    src="assets/images/users/avatar-3.jpg"
                                                                                    class="rounded-circle img-fluid userprofile"
                                                                                    alt=""><span
                                                                                    class="user-status"></span> </div>
                                                                        </div>
                                                                        <div class="flex-grow-1 overflow-hidden">
                                                                            <p class="text-truncate mb-0">Frank Thomas</p>
                                                                        </div>
                                                                        <div class="ms-auto"><span
                                                                                class="badge bg-dark-subtle text-body rounded p-1">8</span>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="d-flex align-items-center px-4 mt-4 pt-2 mb-2">
                                                        <div class="flex-grow-1">
                                                            <h4 class="mb-0 fs-11 text-muted text-uppercase">turmas</h4>
                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <div data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                                data-bs-placement="bottom" aria-label="Create group"
                                                                data-bs-original-title="Create group">
                                                                <!-- Button trigger modal -->
                                                                <button type="button" class="btn btn-soft-success btn-sm">
                                                                    <i class="ri-add-line align-bottom"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="chat-message-list">

                                                        <ul class="list-unstyled chat-list chat-user-list mb-0"
                                                            id="channelList">
                                                            <li id="contact-id-10" data-name="channel"> <a
                                                                    href="javascript: void(0);" class="unread-msg-user">
                                                                    <div class="d-flex align-items-center">
                                                                        <div
                                                                            class="flex-shrink-0 chat-user-img align-self-center me-2 ms-0">
                                                                            <div class="avatar-xxs">
                                                                                <div
                                                                                    class="avatar-title bg-light rounded-circle text-body">
                                                                                    #</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="flex-grow-1 overflow-hidden">
                                                                            <p class="text-truncate mb-0">Landing Design
                                                                            </p>
                                                                        </div>
                                                                        <div>
                                                                            <div class="flex-shrink-0 ms-2"><span
                                                                                    class="badge bg-dark-subtle text-body rounded p-1">7</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a> </li>
                                                            <li id="contact-id-11" data-name="channel"> <a
                                                                    href="javascript: void(0);">
                                                                    <div class="d-flex align-items-center">
                                                                        <div
                                                                            class="flex-shrink-0 chat-user-img align-self-center me-2 ms-0">
                                                                            <div class="avatar-xxs">
                                                                                <div
                                                                                    class="avatar-title bg-light rounded-circle text-body">
                                                                                    #</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="flex-grow-1 overflow-hidden">
                                                                            <p class="text-truncate mb-0">General</p>
                                                                        </div>
                                                                        <div></div>
                                                                    </div>
                                                                </a> </li>
                                                            <li id="contact-id-12" data-name="channel"> <a
                                                                    href="javascript: void(0);" class="unread-msg-user">
                                                                    <div class="d-flex align-items-center">
                                                                        <div
                                                                            class="flex-shrink-0 chat-user-img align-self-center me-2 ms-0">
                                                                            <div class="avatar-xxs">
                                                                                <div
                                                                                    class="avatar-title bg-light rounded-circle text-body">
                                                                                    #</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="flex-grow-1 overflow-hidden">
                                                                            <p class="text-truncate mb-0">Project Tasks</p>
                                                                        </div>
                                                                        <div>
                                                                            <div class="flex-shrink-0 ms-2"><span
                                                                                    class="badge bg-dark-subtle text-body rounded p-1">2</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a> </li>
                                                            <li id="contact-id-13" data-name="channel"> <a
                                                                    href="javascript: void(0);">
                                                                    <div class="d-flex align-items-center">
                                                                        <div
                                                                            class="flex-shrink-0 chat-user-img align-self-center me-2 ms-0">
                                                                            <div class="avatar-xxs">
                                                                                <div
                                                                                    class="avatar-title bg-light rounded-circle text-body">
                                                                                    #</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="flex-grow-1 overflow-hidden">
                                                                            <p class="text-truncate mb-0">Meeting</p>
                                                                        </div>
                                                                        <div></div>
                                                                    </div>
                                                                </a> </li>
                                                            <li id="contact-id-14" data-name="channel"> <a
                                                                    href="javascript: void(0);">
                                                                    <div class="d-flex align-items-center">
                                                                        <div
                                                                            class="flex-shrink-0 chat-user-img align-self-center me-2 ms-0">
                                                                            <div class="avatar-xxs">
                                                                                <div
                                                                                    class="avatar-title bg-light rounded-circle text-body">
                                                                                    #</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="flex-grow-1 overflow-hidden">
                                                                            <p class="text-truncate mb-0">Reporting</p>
                                                                        </div>
                                                                        <div></div>
                                                                    </div>
                                                                </a> </li>
                                                        </ul>
                                                    </div>
                                                    <!-- End chat-message-list -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="simplebar-placeholder" style="width: 300px; height: 653px;"></div>
                                </div>
                                <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                    <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                                </div>
                                <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                                    <div class="simplebar-scrollbar"
                                        style="height: 25px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- end tab contact -->
                </div>
                <!-- end chat leftsidebar -->
                <!-- Start User chat -->
                <div class="user-chat w-100 overflow-hidden user-chat-show">

                    <div class="chat-content d-lg-flex">
                        <!-- start chat conversation section -->
                        <div class="w-100 overflow-hidden position-relative">
                            <!-- conversation user -->
                            <div class="position-relative">


                                <div class="position-relative" id="users-chat" style="display: block;">
                                    <div class="p-3 user-chat-topbar">
                                        <div class="row align-items-center">
                                            <div class="col-sm-4 col-8">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 d-block d-lg-none me-3">
                                                        <a href="javascript: void(0);" class="user-chat-remove fs-18 p-1">
                                                            <i class="ri-arrow-left-s-line align-bottom"></i>
                                                        </a>
                                                    </div>
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <div class="d-flex align-items-center">
                                                            <div
                                                                class="flex-shrink-0 chat-user-img online user-own-img align-self-center me-3 ms-0">
                                                                <img src="assets/images/users/avatar-2.jpg"
                                                                    class="rounded-circle avatar-xs" alt="">
                                                                <span class="user-status"></span>
                                                            </div>
                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <h5 class="text-truncate mb-0 fs-16"><a
                                                                        class="text-reset username"
                                                                        data-bs-toggle="offcanvas"
                                                                        href="#userProfileCanvasExample"
                                                                        aria-controls="userProfileCanvasExample">
                                                                        Lisa Parker</a></h5>
                                                                <p class="text-truncate text-muted fs-14 mb-0 userStatus">
                                                                    <small>Online</small>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-8 col-4">
                                                <ul class="list-inline user-chat-nav text-end mb-0">
                                                    <li class="list-inline-item m-0">
                                                        <div class="dropdown">
                                                            <button class="btn btn-ghost-secondary btn-icon"
                                                                type="button" data-bs-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-search icon-sm">
                                                                    <circle cx="11" cy="11" r="8"></circle>
                                                                    <line x1="21" y1="21" x2="16.65"
                                                                        y2="16.65"></line>
                                                                </svg>
                                                            </button>
                                                            <div
                                                                class="dropdown-menu p-0 dropdown-menu-end dropdown-menu-lg">
                                                                <div class="p-2">
                                                                    <div class="search-box">
                                                                        <input type="text"
                                                                            class="form-control bg-light border-light"
                                                                            placeholder="Search here..."
                                                                            onkeyup="searchMessages()" id="searchMessage">
                                                                        <i class="ri-search-2-line search-icon"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <li class="list-inline-item d-none d-lg-inline-block m-0">
                                                        <button type="button" class="btn btn-ghost-secondary btn-icon"
                                                            data-bs-toggle="offcanvas"
                                                            data-bs-target="#userProfileCanvasExample"
                                                            aria-controls="userProfileCanvasExample">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-info icon-sm">
                                                                <circle cx="12" cy="12" r="10"></circle>
                                                                <line x1="12" y1="16" x2="12"
                                                                    y2="12"></line>
                                                                <line x1="12" y1="8" x2="12.01"
                                                                    y2="8"></line>
                                                            </svg>
                                                        </button>
                                                    </li>

                                                    <li class="list-inline-item m-0">
                                                        <div class="dropdown">
                                                            <button class="btn btn-ghost-secondary btn-icon"
                                                                type="button" data-bs-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-more-vertical icon-sm">
                                                                    <circle cx="12" cy="12" r="1"></circle>
                                                                    <circle cx="12" cy="5" r="1"></circle>
                                                                    <circle cx="12" cy="19" r="1"></circle>
                                                                </svg>
                                                            </button>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item d-block d-lg-none user-profile-show"
                                                                    href="#"><i
                                                                        class="ri-user-2-fill align-bottom text-muted me-2"></i>
                                                                    View Profile</a>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="ri-inbox-archive-line align-bottom text-muted me-2"></i>
                                                                    Archive</a>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="ri-mic-off-line align-bottom text-muted me-2"></i>
                                                                    Muted</a>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="ri-delete-bin-5-line align-bottom text-muted me-2"></i>
                                                                    Delete</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- end chat user head -->
                                    <div class="chat-conversation p-3 p-lg-4 simplebar-scrollable-y"
                                        id="chat-conversation" data-simplebar="init">
                                        <div class="simplebar-wrapper" style="margin: -24px;">
                                            <div class="simplebar-height-auto-observer-wrapper">
                                                <div class="simplebar-height-auto-observer"></div>
                                            </div>
                                            <div class="simplebar-mask">
                                                <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                                    <div class="simplebar-content-wrapper" tabindex="0" role="region"
                                                        aria-label="scrollable content"
                                                        style="height: 100%; overflow: hidden scroll;">
                                                        <div class="simplebar-content" style="padding: 24px;">
                                                            <div id="elmLoader"></div>
                                                            <ul class="list-unstyled chat-conversation-list"
                                                                id="users-conversation">
                                                                @foreach ($mensagens as $mensagem)
                                                                @if ($mensagem->user_id==auth()->user()->id)
                                                                    <li class="chat-list left" id="1">
                                                                        <div class="conversation-list">
                                                                            <div class="chat-avatar">
                                                                                <img src="assets/images/users/avatar-2.jpg"
                                                                                    alt="">
                                                                            </div>
                                                                            <div class="user-chat-content">
                                                                                <div class="ctext-wrap">
                                                                                    <div class="ctext-wrap-content"
                                                                                        id="1">
                                                                                        <p class="mb-0 ctext-content">{{ @$mensagem->mensagem }}</p>
                                                                                    </div>
                                                                                    <div
                                                                                        class="dropdown align-self-start message-box-drop">
                                                                                        <a class="dropdown-toggle"
                                                                                            href="#" role="button"
                                                                                            data-bs-toggle="dropdown"
                                                                                            aria-haspopup="true"
                                                                                            aria-expanded="false"> <i
                                                                                                class="ri-more-2-fill"></i>
                                                                                        </a>
                                                                                        <div class="dropdown-menu">
                                                                                            <a class="dropdown-item copy-message"
                                                                                                href="#"><i
                                                                                                    class="ri-file-copy-line me-2 text-muted align-bottom"></i>Copy</a>
                                                                                            <a class="dropdown-item delete-item"
                                                                                                href="#"><i
                                                                                                    class="ri-delete-bin-5-line me-2 text-muted align-bottom"></i>Delete</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="conversation-name"><span
                                                                                        class="d-none name">Lisa
                                                                                        Parker</span><small
                                                                                        class="text-muted time">09:07
                                                                                        am</small> <span
                                                                                        class="text-success check-message-icon"><i
                                                                                            class="bx bx-check-double"></i></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>

                                                                @else

                                                                    <li class="chat-list right" id="2">
                                                                        <div class="conversation-list">
                                                                            <div class="user-chat-content">
                                                                                <div class="ctext-wrap">
                                                                                    <div class="ctext-wrap-content"
                                                                                        id="2">
                                                                                        <p class="mb-0 ctext-content">{{ @$mensagem->mensagem }}</p>
                                                                                    </div>
                                                                                    <div
                                                                                        class="dropdown align-self-start message-box-drop">
                                                                                        <a class="dropdown-toggle"
                                                                                            href="#" role="button"
                                                                                            data-bs-toggle="dropdown"
                                                                                            aria-haspopup="true"
                                                                                            aria-expanded="false"> <i
                                                                                                class="ri-more-2-fill"></i>
                                                                                        </a>
                                                                                        <div class="dropdown-menu">
                                                                                            <a class="dropdown-item copy-message"
                                                                                                href="#"><i
                                                                                                    class="ri-file-copy-line me-2 text-muted align-bottom"></i>Copy</a>
                                                                                            <a class="dropdown-item delete-item"
                                                                                                href="#"><i
                                                                                                    class="ri-delete-bin-5-line me-2 text-muted align-bottom"></i>Delete</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="conversation-name"><span
                                                                                        class="d-none name">Frank
                                                                                        Thomas</span><small
                                                                                        class="text-muted time">09:08
                                                                                        am</small> <span
                                                                                        class="text-success check-message-icon"><i
                                                                                            class="bx bx-check-double"></i></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                @endif
                                                                @endforeach

                                                            </ul>
                                                            <!-- end chat-conversation-list -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="simplebar-placeholder" style="width: 712px; height: 658px;"></div>
                                        </div>
                                        <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                            <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                                        </div>
                                        <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                                            <div class="simplebar-scrollbar"
                                                style="height: 25px; display: block; transform: translate3d(0px, 0px, 0px);">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="alert alert-warning alert-dismissible copyclipboard-alert px-4 fade show "
                                        id="copyClipBoard" role="alert">
                                        Mensagem Copiada
                                    </div>
                                </div>

                                <div class="position-relative" id="channel-chat" style="display: none;">
                                    <div class="p-3 user-chat-topbar">
                                        <div class="row align-items-center">
                                            <div class="col-sm-4 col-8">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 d-block d-lg-none me-3">
                                                        <a href="javascript: void(0);"
                                                            class="user-chat-remove fs-18 p-1"><i
                                                                class="ri-arrow-left-s-line align-bottom"></i></a>
                                                    </div>
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <div class="d-flex align-items-center">
                                                            <div
                                                                class="flex-shrink-0 chat-user-img online user-own-img align-self-center me-3 ms-0">
                                                                <img src="assets/images/users/avatar-2.jpg"
                                                                    class="rounded-circle avatar-xs" alt="">
                                                            </div>
                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <h5 class="text-truncate mb-0 fs-16"><a
                                                                        class="text-reset username"
                                                                        data-bs-toggle="offcanvas"
                                                                        href="#userProfileCanvasExample"
                                                                        aria-controls="userProfileCanvasExample">Lisa
                                                                        Parker</a></h5>
                                                                <p class="text-truncate text-muted fs-14 mb-0 userStatus">
                                                                    <small>24 Members</small>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-8 col-4">
                                                <ul class="list-inline user-chat-nav text-end mb-0">
                                                    <li class="list-inline-item m-0">
                                                        <div class="dropdown">
                                                            <button class="btn btn-ghost-secondary btn-icon"
                                                                type="button" data-bs-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-search icon-sm">
                                                                    <circle cx="11" cy="11" r="8"></circle>
                                                                    <line x1="21" y1="21" x2="16.65"
                                                                        y2="16.65"></line>
                                                                </svg>
                                                            </button>
                                                            <div
                                                                class="dropdown-menu p-0 dropdown-menu-end dropdown-menu-lg">
                                                                <div class="p-2">
                                                                    <div class="search-box">
                                                                        <input type="text"
                                                                            class="form-control bg-light border-light"
                                                                            placeholder="Search here..."
                                                                            onkeyup="searchMessages()" id="searchMessage">
                                                                        <i class="ri-search-2-line search-icon"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <li class="list-inline-item d-none d-lg-inline-block m-0">
                                                        <button type="button" class="btn btn-ghost-secondary btn-icon"
                                                            data-bs-toggle="offcanvas"
                                                            data-bs-target="#userProfileCanvasExample"
                                                            aria-controls="userProfileCanvasExample">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-info icon-sm">
                                                                <circle cx="12" cy="12" r="10"></circle>
                                                                <line x1="12" y1="16" x2="12"
                                                                    y2="12"></line>
                                                                <line x1="12" y1="8" x2="12.01"
                                                                    y2="8"></line>
                                                            </svg>
                                                        </button>
                                                    </li>

                                                    <li class="list-inline-item m-0">
                                                        <div class="dropdown">
                                                            <button class="btn btn-ghost-secondary btn-icon"
                                                                type="button" data-bs-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-more-vertical icon-sm">
                                                                    <circle cx="12" cy="12" r="1"></circle>
                                                                    <circle cx="12" cy="5" r="1"></circle>
                                                                    <circle cx="12" cy="19" r="1"></circle>
                                                                </svg>
                                                            </button>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item d-block d-lg-none user-profile-show"
                                                                    href="#"><i
                                                                        class="ri-user-2-fill align-bottom text-muted me-2"></i>
                                                                    View Profile</a>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="ri-inbox-archive-line align-bottom text-muted me-2"></i>
                                                                    Archive</a>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="ri-mic-off-line align-bottom text-muted me-2"></i>
                                                                    Muted</a>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="ri-delete-bin-5-line align-bottom text-muted me-2"></i>
                                                                    Delete</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- end chat user head -->
                                    <div class="chat-conversation p-3 p-lg-4" id="chat-conversation"
                                        data-simplebar="init">
                                        <div class="simplebar-wrapper" style="margin: -24px;">
                                            <div class="simplebar-height-auto-observer-wrapper">
                                                <div class="simplebar-height-auto-observer"></div>
                                            </div>
                                            <div class="simplebar-mask">
                                                <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                                    <div class="simplebar-content-wrapper" tabindex="0" role="region"
                                                        aria-label="scrollable content"
                                                        style="height: auto; overflow: hidden;">
                                                        <div class="simplebar-content" style="padding: 24px;">
                                                            <ul class="list-unstyled chat-conversation-list"
                                                                id="channel-conversation">
                                                            </ul>
                                                            <!-- end chat-conversation-list -->

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="simplebar-placeholder" style="width: 0px; height: 0px;"></div>
                                        </div>
                                        <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                            <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                                        </div>
                                        <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                                            <div class="simplebar-scrollbar" style="height: 0px; display: none;"></div>
                                        </div>
                                    </div>
                                    <div class="alert alert-warning alert-dismissible copyclipboard-alert px-4 fade show "
                                        id="copyClipBoardChannel" role="alert">
                                        Message copied
                                    </div>
                                </div>

                                <!-- end chat-conversation -->

                                <div class="chat-input-section p-3 p-lg-4">

                                    <form id="chat-form" enctype="multipart/form-data">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-auto">
                                                <div class="chat-input-links me-2">
                                                    <div class="links-list-item">
                                                        <button type="button"
                                                            class="btn btn-link text-decoration-none emoji-btn"
                                                            id="emoji-btn">
                                                            <i class="bx bx-smile align-middle"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col">
                                                <div class="chat-input-feedback">
                                                    Please Enter a Message
                                                </div>
                                                {{$sms}}
                                                <input type="text" 
                                                    class="form-control chat-input bg-light border-light" id="chat-input"
                                                    placeholder="Escreva a sua mensagem..." autocomplete="off">
                                            </div>
                                            <div class="col-auto">
                                                <div class="chat-input-links ms-2">
                                                    <div class="links-list-item">
                                                        <button type="submit"
                                                            class="btn btn-info chat-send waves-effect waves-light">
                                                            <i class="ri-send-plane-2-fill align-bottom"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </form>
                                </div>

                                <div class="replyCard">
                                    <div class="card mb-0">
                                        <div class="card-body py-3">
                                            <div class="replymessage-block mb-0 d-flex align-items-start">
                                                <div class="flex-grow-1">
                                                    <h5 class="conversation-name"></h5>
                                                    <p class="mb-0"></p>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <button type="button" id="close_toggle"
                                                        class="btn btn-sm btn-link mt-n2 me-n3 fs-18">
                                                        <i class="bx bx-x align-middle"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end chat-wrapper -->
        </div>
    </div>
    {{-- <script>
        const pusher = new Pusher('{{ config('boadcasting.connections.pusher.key') }}', {cluster: 'eu'});
        const channel = pusher.subscribe('public')
        channel.bind('chat', function (data){
            $.post('/receive', {
                _token: '{{ csrf_token() }}',
                mensagem: data.mensagem,
            })
            .done(function (res){
                $(".mensagem > .mensagem").last().after(res)
            })
        } )

        $("form").submit(function (event){
            event.preventDefault();
            $.ajax({
                url: "/broadcast",
                method: 'POST',
                headers: {
                    'X-Socket-Id': pusher.connections.socket_id
                },
                data: {
                    _token: '{{ csrf_token() }}',
                    mensagem: $("form #mensagem").val(),
                }
            })
            .done(function (res){
                $(".mensagem > .mensagem").last().after(res)
                mensagem: $("form #mensagem").val(),
                $(document).scrolltop($(document).height())
            })
        })
    </script> --}}
@endsection
