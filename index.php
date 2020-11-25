<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PC Part Wiki</title>
    <link rel="icon" href="img/icon.png">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/lightbox.min.css">
    <link rel="stylesheet" href="css/bootstrap-submenu.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-12 col-lg-10 main">
            <div class="col-md-12 nb">
                <nav class="navbar navbar-expand-sm bg-light fixed-top">
                    <a class="navbar-brand" href="./">
                        <img src="img/logo.png" alt="logo">
                        PC Part Wiki
                    </a>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="btn btn-success" href="./">HOME</a>
                        </li>
                        <li class="nav-item btn-group">
                            <a class="btn btn-success" href="gallery">GALLERY</a>
                            <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"></button>
                            <div class="dropdown-menu">
                                <ul>
                                    <li class="dropdown-submenu">
                                        <a class="dropdown-item dropdown-toggle" href="#">Pictures</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="gallery/cpu">CPU</a></li>
                                            <li><a class="dropdown-item" href="gallery/ram">RAM</a></li>
                                            <li><a class="dropdown-item" href="gallery/other">Other</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="dropdown-item" href="gallery/video">Videos</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-success" href="contact">CONTACT</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-success" href="about">ABOUT</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-success" href="login">LOGIN</a>
                        </li>
                    </ul>
                    <div class="dropdown phonemenu">
                        <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                            Menu
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="index">HOME</a>
                            <a class="dropdown-item" href="gallery">GALLERY</a>
                            <a class="dropdown-item" href="contact">CONTACT</a>
                            <a class="dropdown-item" href="about">ABOUT</a>
                            <a class="dropdown-item" href="login">LOGIN</a>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="row">
                <div class="col-md-2 left">
                    <div id="accordion" class="sticky-top">
                        <div class="card">
                            <div class="card-header" data-toggle="collapse" href="#collapseOne">PC Parts</div>
                            <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                <div class="card-body">
                                    <p><a href="#CPU">CPU</a></p>
                                    <p><a href="#RAM">RAM</a></p>
                                    <p><a href="#GPU">GPU</a></p>
                                    <p><a href="#MB">Motherboard</a></p>
                                    <p><a href="#PSU">PSU</a></p>
                                    <p><a href="">Storage Device (W.I.P.)</a></p>
                                    <p><a href="">PC Case (W.I.P.)</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" data-toggle="collapse" href="#collapseTwo">2</div>
                            <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    content 2
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" data-toggle="collapse" href="#collapseThree">3</div>
                            <div id="collapseThree" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    content 3
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 center">
                    <div class="anchor" id="CPU"></div>
                    <div class="row post">
                        <a href="img/cpu.jpg" class="col-4 p-0" data-lightbox="CPU"><img src="img/cpu.jpg" alt=""></a>
                        <div class="col-8">
                            <a>What is a CPU?</a>
                            <p>
                                A central processor, or CPU, is arguably the most important component of
                                any computing device. It handles basic instructions and allocates the more
                                complicated tasks to other specific chips to get them to do what they do best.
                                It’s the core of your PC, smartphone, or tablet. and it’s what makes the whole
                                device run as it should.
                            </p>
                            <p>
                                The CPU itself is a core component of what makes a computer a computer,
                                but it isn’t the computer itself — it’s just the brains of the operation.
                                It’s a small computer chip that sits atop the main circuit board (motherboard)
                                of a computer, whether that’s a desktop PC, laptop, or tablet. It’s distinctly
                                separate from the memory, which is where information is stored, and the
                                graphics card or graphics chip, which handles all rendering of video and 3D
                                graphics to your monitor or screen.
                            </p>
                        </div>
                    </div>
                    <div class="anchor" id="RAM"></div>
                    <div class="row post">
                        <a href="img/ram.jpg" class="col-4 p-0" data-lightbox="CPU"><img src="img/ram.jpg" alt=""></a>
                        <div class="col-8">
                            <a>What is RAM?</a>
                            <p>
                                Alternatively referred to as main memory, primary memory, or system memory,
                                RAM (random-access memory) is a hardware device that allows information to
                                be stored and retrieved on a computer. RAM is usually associated with DRAM,
                                which is a type of memory module. Because information is accessed randomly
                                instead of sequentially like it is on a CD or hard drive, access times are
                                much faster. However, unlike ROM, RAM is a volatile memory and requires power
                                to keep the data accessible. If the computer is turned off, all data contained
                                in RAM is lost.
                            </p>
                            <p>
                                Over the evolution of the computer, there have been different variations of RAM.
                                Some of the more common examples are DIMM, RIMM, SIMM, SO-DIMM, and SOO-RIMM.
                                Below is an example image of a 512 MB DIMM computer memory module, a piece of
                                RAM found in older desktop computers. This memory module would be installed into
                                one of the memory slots on a motherboard.
                            </p>
                        </div>
                    </div>
                    <div class="anchor" id="GPU"></div>
                    <div class="row post">
                        <a href="img/gpu.jpg" class="col-4 p-0" data-lightbox="CPU"><img src="img/gpu.jpg" alt=""></a>
                        <div class="col-8">
                            <a>What is a GPU?</a>
                            <p>
                                GPU stands for graphics processing unit. You’ll also see GPUs commonly referred
                                to as graphics cards or video cards. Every PC uses a GPU to render images, video
                                and 2D or 3D animations for display. A GPU performs quick math calculations and
                                frees up the CPU to do other things. Whereas a CPU uses a few cores focused on
                                sequential serial processing, a GPU has thousands of smaller cores made for
                                multi-tasking.
                            </p>
                            <p>There are two different types of GPUs:</p>
                            <div>
                                <ul>
                                    <li>
                                        Integrated GPUs are located on a PC’s CPU and share memory with the CPU’s processor.
                                    </li>
                                    <li>
                                        Discrete GPUs live on their own card and have their own video memory (VRAM),
                                        so that the PC doesn’t have to use its RAM for graphics.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="anchor" id="MB"></div>
                    <div class="row post">
                        <a href="img/mb.jpg" class="col-4 p-0" data-lightbox="CPU"><img src="img/mb.jpg" alt=""></a>
                        <div class="col-8">
                            <a>What is a motherboard?</a>
                            <p>
                                Alternatively referred to as the mb, mainboard, mboard, mobo, mobd, backplane
                                board, base board, main circuit board, planar board, system board, or a logic
                                board on Apple computers. The motherboard is a printed circuit board and foundation
                                of a computer that is the biggest board in a computer chassis. It allocates power
                                and allows communication to and between the CPU, RAM, and all other computer
                                hardware components.
                            </p>
                            <p>
                                A motherboard provides connectivity between the hardware components of a computer,
                                like the processor (CPU), memory (RAM), hard drive, and video card. There are
                                multiple types of motherboards, designed to fit different types and sizes of computers.
                            </p>
                        </div>
                    </div>
                    <div class="anchor" id="PSU"></div>
                    <div class="row post">
                        <a href="img/psu.jpg" class="col-4 p-0" data-lightbox="CPU"><img src="img/psu.jpg" alt=""></a>
                        <div class="col-8">
                            <a>What is a PSU?</a>
                            <p>
                                The power supply unit is the piece of hardware that converts the power provided
                                from the outlet into usable power for the many parts inside the computer case.
                            </p>
                            <p>
                                It converts the alternating current from your wall outlet into a continuous
                                form of power called direct current that the computer components require. It
                                also regulates overheating by controlling voltage, which might change
                                automatically or manually depending on the power supply.
                            </p>
                            <p>
                                The power supply is a crucial piece because, without it, the rest of the
                                internal hardware can't function. Motherboards, cases, and power supplies
                                all come in different sizes called form factors. All three must be compatible
                                to work properly together.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 right">
                    <div class="jumbotron sticky-top">
                        YOUR<br>
                        AD<br>
                        HERE<br>
                    </div>
                </div>
            </div>
            <div class="col-md-12 footer">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                In fringilla lectus sit amet quam placerat ullamcorper.
                In vehicula felis vitae rhoncus finibus. Fusce malesuada mollis velit,
                a tincidunt dui consequat id. Etiam non euismod nunc.
                Praesent posuere euismod enim, eu efficitur dui mollis sit amet.
                Vestibulum interdum dui in nisi bibendum, id cursus massa aliquam.
                Nulla et arcu non mi viverra tempor. Quisque placerat nulla non metus fringilla vehicula.
                In sed eleifend ante, vitae rutrum ipsum. Vestibulum facilisis, eros ac euismod placerat,
                felis lectus iaculis libero, sit amet vestibulum justo neque a lorem.
            </div>
            <a class="btn btn-dark top" href="#">TOP</a>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="js/bootstrap-submenu.js"></script>
    <script src="js/lightbox-plus-jquery.min.js"></script>
</body>
</html>