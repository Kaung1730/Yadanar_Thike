<!DOCTYPE html>

<head>
    <title>Author List</title>
    <link rel="stylesheet" href="../resource/css/authorList.css">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!-- notosan myanmar font link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Myanmar&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container ">
        <div class=" menubar_top ">
            <a href="" class="logo mt-2 "><img src="../resource/image/logo.png" alt=""></a>
            <!-- <nav class="navbar"> -->
            <ul class="navList ">
                <li class="navItem"><a href="">မူလစာမျက်နှာ</a></li>
                <li class="navItem"><a href="">စာအုပ်များ</a></li>
                <li class="navItem"><a href="">စာရေးဆရာများ</a></li>
                <li class="navItem"><a href="">အကောင့်သို့ဝင်ရန်</a></li>
            </ul>
            <div>
                <a href=""><img src="../resource/image/useracc.jpg" alt="" class="useracc "></a>
                <a href=""><span class="me-5">အကောင့်အမည်</span></a>
                <a href="">
                    <img src="../resource/image/cart.png" alt="" class="cart">
                </a>
                <span class="position-absolute  translate-middle badge bg-danger">2</span>

            </div>
        </div>

        <div class="menubar_bottom">
            <div class="menubarIcon">
                <ion-icon name="menu" class="menubarIcon h-100 w-100"></ion-icon>
            </div>
            <!-- <div class="dropdown"> -->

            <div class="dropdown">
                <a class="btn  dropdown-toggle h-100" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown">
                    ရှာဖွေရန်
                </a>

                <ul class="dropdown-menu " aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item dpd" href="#">AUTHOR</a></li>
                    <li><a class="dropdown-item dpd" href="#">BOOK</a></li>

                </ul>
            </div>

            <!-- search -->
            <div class="search">
                <input type="text" name="" class="searchBox" placeholder="သင်ဘာကိုရှာဖွေချင်ပါသလဲ? ဒီကနေ ဝင်ရှာလို့ရပါတယ်">
            </div>

            <button class="figured  ">
                <ion-icon name="search"></ion-icon>
            </button>
        </div>
    </div>
    
    <div class="authorList">
        <div class="title">စာရေးဆရာအမည် (က မှ အ အထိ)</div>

        <!-- က မှ င -->
        <div class="alphabetLine mt-4">
            <a href="#alphabet1"><button class="alphabet firstWord me-5 ">က</button></a>
            <a href="#alphabet2"><button class="alphabet me-5">ခ</button></a>
            <a href="#alphabet3"><button class="alphabet me-5">ဂ</button></a>
            <a href="#"><button class="alphabet me-5 bg-secondary text-light">ဃ</button></a>
            <a href="#alphabet5"><button class="alphabet me-5">င</button></a>
        </div>
        <!-- စ မှ ည -->
        <div class="alphabetLine mt-4">
            <a href="#alphabet6"><button class="alphabet firstWord me-5 ">စ</button></a>
            <a href="#alphabet7"><button class="alphabet me-5">ဆ</button></a>
            <a href="#alphabet8"><button class="alphabet me-5">ဇ</button></a>
            <a href="#"><button class="alphabet me-5 bg-secondary text-light">ဈ</button></a>
            <a href="#alphabet10"><button class="alphabet me-5">ည</button></a>
        </div>

        <!-- ဋ မှ ဏ -->
        <div class="alphabetLine mt-4">
            <a href="#alphabet11"><button class="alphabet firstWord me-5  bg-secondary text-light">ဋ</button></a>
            <a href="#alphabet12"><button class="alphabet me-5 bg-secondary text-light">ဌ</button></a>
            <a href="#alphabet13"><button class="alphabet me-5 bg-secondary text-light">ဍ</button></a>
            <a href="#alphabet14"><button class="alphabet me-5 bg-secondary text-light">ဎ</button></a>
            <a href="#alphabet15"><button class="alphabet me-5 bg-secondary text-light">ဏ</button></a>
        </div>

        <!-- တ မှ န -->
        <div class="alphabetLine mt-4">
            <a href="#alphabet16"><button class="alphabet firstWord me-5 ">တ</button></a>
            <a href="#alphabet17"><button class="alphabet me-5">ထ</button></a>
            <a href="#alphabet18"><button class="alphabet me-5">ဒ</button></a>
            <a href="#alphabet19"><button class="alphabet me-5">ဓ</button></a>
            <a href="#alphabet20"><button class="alphabet me-5">န</button></a>
        </div>

        <!--ပ  မှ မ -->
        <div class="alphabetLine mt-4">
            <a href="#alphabet21"><button class="alphabet firstWord me-5 ">ပ</button></a>
            <a href="#alphabet22"><button class="alphabet me-5">ဖ</button></a>
            <a href="#alphabet23"><button class="alphabet me-5">ဗ</button></a>
            <a href="#alphabet24"><button class="alphabet me-5">ဘ</button></a>
            <a href="#alphabet25"><button class="alphabet me-5">မ</button></a>
        </div>

        <!-- ယ မှ သ -->
        <div class="alphabetLine mt-4">
            <a href="#alphabet26"><button class="alphabet firstWord me-5 ">ယ</button></a>
            <a href="#alphabet27"><button class="alphabet me-5">ရ</button></a>
            <a href="#alphabet28"><button class="alphabet me-5">လ</button></a>
            <a href="#alphabet29"><button class="alphabet me-5">ဝ</button></a>
            <a href="#alphabet30"><button class="alphabet me-5">သ</button></a>
        </div>

        <!-- ဟ မှ ဥ -->
        <div class="alphabetLine mt-4">
            <a href="#alphabet31"><button class="alphabet firstWord me-5 ">ဟ</button></a>
            <a href="#"><button class="alphabet me-5 bg-secondary text-light">ဠ</button></a>
            <a href="#alphabet33"><button class="alphabet me-5">အ</button></a>
            <a href="#alphabet34"><button class="alphabet me-5">ဥ</button></a>

        </div>

        <!-- က အက္ခရာဖြင့်စသော စာရေးဆရာများ -->
        <div class="box">
            <div class="alphabetList" id="alphabet1">
                က အက္ခရာဖြင့်စသော စာရေးဆရာများ
            </div>
            <div class="authorsList">
                <ul class="authorListLength">
                    <li>၁။ ကိုကိုလေး</li>
                    <li>၂။ ကိုနေ (မန်း)</li>
                    <li>၃။ ကောင်းပြည့်သော</li>
                    <li>၄။ ကောင်းသန့်</li>
                    <li>၅။ ကောင်းသာ</li>
                    <li>၆။ ကျားပေါက်</li>
                    <li>၇။ ကျော်ဝင်း</li>
                    <li>၈။ ကြည်မင်း</li>
                    <li>၉။ ကြည်ရွှန်း</li>
                    <li>၁၀။ ကြည်အေး</li>
                </ul>
            </div>
        </div>

        <!-- ခ အက္ခရာဖြင့်စသော စာရေးဆရာများ -->

        <div class="box">
            <div class="alphabetList" id="alphabet2">
                ခ အက္ခရာဖြင့်စသော စာရေးဆရာများ
            </div>
            <div class="authorsList">
                <ul>
                    <li>၁။ ခက်ဇော်</li>
                    <li>၂။ ခင်ခင်ထူး</li>
                    <li>၃။ ခင်စောတင့်</li>
                    <li>၄။ ခင်နှင်းယု</li>
                    <li>၅။ ချစ်ဦးညို</li>
                    <li>၆။ ချမ်းမြေ့ဝင်း</li>
                    <li>၇။ ခွန်းညိုသွေး</li>
                </ul>
            </div>
        </div>
        <!-- ဂ အက္ခရာဖြင့်စသော စာရေးဆရာများ -->
        <div class="box">
            <div class="alphabetList" id="alphabet3">
                ဂ အက္ခရာဖြင့်စသော စာရေးဆရာများ
            </div>
            <div class="authorsList">
                <ul>
                    <li>၁။ ဂျာနယ်ကျော်မမလေး</li>
                    <li>၂။ ဂျာနယ်ကျော်ဦးချစ်မောင် </li>
                    <li>၃။ ဂျူး </li>
                </ul>
            </div>
        </div>
        <!-- င အက္ခရာဖြင့်စသော စာရေးဆရာများ -->
        <div class="box">
            <div class="alphabetList" id="alphabet5">
                င အက္ခရာဖြင့်စသော စာရေးဆရာများ
            </div>
            <div class="authorsList">
                <ul>
                    <li>၁။ ငြိမ်းကျော်</li>
                </ul>
            </div>
        </div>
        <!-- စ အက္ခရာဖြင့်စသော စာရေးဆရာများ -->
        <div class="box">
            <div class="alphabetList" id="alphabet6">
                စ အက္ခရာဖြင့်စသော စာရေးဆရာများ
            </div>
            <div class="authorsList">
                <ul>
                    <li>၁။ စိမ့်(ပညာရေး)</li>
                    <li>၂။ စိုးစိုး(အင်္ဂပူ)</li>
                    <li>၃။ စံပယ်ဖြူနု</li>
                    <li>၄။ စံဇာဏီဘို</li>

                </ul>
            </div>
        </div>
        <!-- ဆ အက္ခရာဖြင့်စသော စာရေးဆရာများ -->
        <div class="box">
            <div class="alphabetList" id="alphabet7">
                ဆ အက္ခရာဖြင့်စသော စာရေးဆရာများ
            </div>
            <div class="authorsList">
                <ul>
                    <li>၁။ ဆန်းကျော်စွာဝင်း</li>
                    <li>၂။ ဆရာချမ်းဇော်ထက်</li>
                    <li>၃။ ဆရာတော်ဦးဇောတိက</li>
                    <li>၄။ ဆုခြည်ကို</li>

                </ul>
            </div>
        </div>
        <!-- ဇ အက္ခရာဖြင့်စသော စာရေးဆရာများ -->
        <div class="box">
            <div class="alphabetList" id="alphabet8">
                ဇ အက္ခရာဖြင့်စသော စာရေးဆရာများ
            </div>
            <div class="authorsList">
                <ul>
                    <li>၁။ ဇဏ်ခီ</li>
                    <li>၂။ ဇော်ဂျီ </li>
                    <li>၃။ ဇော်ဝင်းကြူ(ပျဥ်းမနား) </li>
                </ul>
            </div>
        </div>

        <!-- ည အက္ခရာဖြင့်စသော စာရေးဆရာများ -->
        <div class="box">
            <div class="alphabetList" id="alphabet10">
                ည အက္ခရာဖြင့်စသော စာရေးဆရာများ
            </div>
            <div class="authorsList">
                <ul>
                    <li>၁။ ညီညီနိုင်</li>
                    <li>၂။ ညီပုလေး </li>

                </ul>
            </div>
        </div>

        <!-- တ အက္ခရာဖြင့်စသော စာရေးဆရာများ -->
        <div class="box">
            <div class="alphabetList" id="alphabet16">
                တ အက္ခရာဖြင့်စသော စာရေးဆရာများ
            </div>
            <div class="authorsList">
                <ul>
                    <li>၁။ တက္ကသိုလ်စိန်တင်</li>
                    <li>၂။ တက္ကသိုလ်ဘုန်းနိုင်</li>
                    <li>၃။ တင်ညွှန့်</li>
                    <li>၄။ တင်မောင်မြင့်</li>
                </ul>
            </div>
        </div>

        <!-- ထ အက္ခရာဖြင့်စသော စာရေးဆရာများ -->
        <div class="box">
            <div class="alphabetList" id="alphabet17">
                ထ အက္ခရာဖြင့်စသော စာရေးဆရာများ
            </div>
            <div class="authorsList">
                <ul>
                    <li>၁။ ထင်လင်း</li>
                    <li>၂။ ထူးအိမ်သင် </li>
                </ul>
            </div>
        </div>

        <!-- ဒ အက္ခရာဖြင့်စသော စာရေးဆရာများ-->
        <div class="box">
            <div class="alphabetList" id="alphabet18">
                ဒ အက္ခရာဖြင့်စသော စာရေးဆရာများ
            </div>
            <div class="authorsList">
                <ul>
                    <li>၁။ ဒဂုန်တာရာ</li>
                    <li>၂။ ဒဂုန်ရွှေမျှား</li>
                    <li>၃။ ဒေါက်တာစိုးလွင်</li>
                    <li>၄။ ဒေါက်တာဖြိုးသီဟ</li>
                    <li>၅။ ဒေါက်တာမတင်ဝင်း(ပညာရေးတက္ကသိုလ်)
                    </li>
                    <li>၆။ ဒေါက်တာသန်းထွန်း</li>
                    <li>၇။ ဒေါက်တာသိန်းထွန်း</li>
                </ul>
            </div>
        </div>

        <!-- ဓ အက္ခရာဖြင့်စသော စာရေးဆရာများ -->
        <div class="box">
            <div class="alphabetList" id="alphabet19">
                ဓ အက္ခရာဖြင့်စသော စာရေးဆရာများ
            </div>
            <div class="authorsList">
                <ul>
                    <li>၁။ ဓမ္မဘေရီ အရှင်ဝီရိယ(တောင်စွန်း)</li>
                </ul>
            </div>
        </div>

        <!-- န အက္ခရာဖြင့်စသော စာရေးဆရာများ-->
        <div class="box">
            <div class="alphabetList" id="alphabet20">
                န အက္ခရာဖြင့်စသော စာရေးဆရာများ
            </div>
            <div class="authorsList">
                <ul>
                    <li>၁။ နတ်နွယ်</li>
                    <li>၂။ နန္ဒာသိန်းဇံ</li>
                    <li>၃။ နိုင်ဦး</li>
                    <li>၄။ နိုင်းနိုင်းစနေ</li>
                    <li>၅။ နီကိုရဲ</li>
                    <li>၆။ နုနုရည်အင်းဝ</li>
                    <li>၇။ နေဝင်းမြင့်</li>
                </ul>
            </div>
        </div>

        <!-- ပ အက္ခရာဖြင့်စသော စာရေးဆရာများ-->
        <div class="box">
            <div class="alphabetList" id="alphabet21">
                ပ အက္ခရာဖြင့်စသော စာရေးဆရာများ
            </div>
            <div class="authorsList">
                <ul>
                    <li>၁။ ပါပီယွန်</li>
                    <li>၂။ ပါရဂူ</li>
                    <li>၃။ ပီမိုးနင်း</li>
                    <li>၄။ ပုညခင်</li>
                </ul>
            </div>
        </div>

        <!--ဖ အက္ခရာဖြင့်စသော စာရေးဆရာများ -->
        <div class="box">
            <div class="alphabetList" id="alphabet22">
                ဖ အက္ခရာဖြင့်စသော စာရေးဆရာများ
            </div>
            <div class="authorsList">
                <ul>
                    <li>၁။ ဖေမြင့်</li>
                    <li>၂။ ဖရော်ဆန် </li>
                </ul>
            </div>
        </div>

        <!-- ဗ အက္ခရာဖြင့်စသော စာရေးဆရာများ -->
        <div class="box">
            <div class="alphabetList" id="alphabet23">
                ဗ အက္ခရာဖြင့်စသော စာရေးဆရာများ
            </div>
            <div class="authorsList">
                <ul>
                    <li>၁။ ဗန်းမော်သိန်းဖေ </li>
                </ul>
            </div>
        </div>

        <!-- ဘ အက္ခရာဖြင့်စသော စာရေးဆရာများ-->
        <div class="box">
            <div class="alphabetList" id="alphabet24">
                ဘ အက္ခရာဖြင့်စသော စာရေးဆရာများ
            </div>
            <div class="authorsList">
                <ul>
                    <li>၁။ ဘဝသစ်ဦးအော်ကျော်</li>
                </ul>
            </div>
        </div>

        <!-- မ အက္ခရာဖြင့်စသော စာရေးဆရာများ-->
        <div class="box">
            <div class="alphabetList" id="alphabet25">
                မ အက္ခရာဖြင့်စသော စာရေးဆရာများ
            </div>
            <div class="authorsList">
                <ul>
                    <li>၁။ မင်းခိုက်စိုးစန် </li>
                    <li>၂။ မင်းလူ</li>
                    <li>၃။ မစန္ဒာ</li>
                    <li>၄။ မင်းသေ့</li>
                    <li>၅။ မသီတာ(စမ်းချောင်း)</li>
                    <li>၆။ မိုးမိုး(အင်းလျား)</li>
                    <li>၇။ မိုးရှင်း(IMT)</li>
                    <li>၈။ မောင်ထွန်းသူ</li>
                    <li>၉။ မောင်ပေါ်ထွန်း</li>
                    <li>၁၀။ မောင်မင်းစိုး</li>
                    <li>၁၁။ မောင်သာနိုး</li>
                    <li>၁၂။ မြတ်ငြိမ်း</li>
                    <li>၁၃။ မြနှင်းဆီ</li>
                    <li>၁၄။ မြသန်းတင့်</li>
                    <li>၁၅။ မွန်ဟော်စီ</li>
                </ul>
            </div>
        </div>

        <!-- ယ အက္ခရာဖြင့်စသော စာရေးဆရာများ -->
        <div class="box">
            <div class="alphabetList" id="alphabet26">
                ယ အက္ခရာဖြင့်စသော စာရေးဆရာများ
            </div>
            <div class="authorsList">
                <ul>
                    <li>၁။ ယုဝတီ ခင်စိန်လှိုင</li>
                </ul>
            </div>
        </div>

        <!-- ရ အက္ခရာဖြင့်စသော စာရေးဆရာများ -->
        <div class="box">
            <div class="alphabetList" id="alphabet27">
                ရ အက္ခရာဖြင့်စသော စာရေးဆရာများ
            </div>
            <div class="authorsList">
                <ul>
                    <li>၁။ ရွှေဥဒေါင်း</li>
                </ul>
            </div>
        </div>

        <!-- လ အက္ခရာဖြင့်စသော စာရေးဆရာများ -->
        <div class="box">
            <div class="alphabetList" id="alphabet28">
                လ အက္ခရာဖြင့်စသော စာရေးဆရာများ
            </div>
            <div class="authorsList">
                <ul>
                    <li>၁။
                        လူထုစိန်ဝင်း</li>
                    <li>၂။ လူနေ</li>
                </ul>
            </div>
        </div>

        <!-- ဝ အက္ခရာဖြင့်စသော စာရေးဆရာများ -->
        <div class="box">
            <div class="alphabetList" id="alphabet29">
                ဝ အက္ခရာဖြင့်စသော စာရေးဆရာများ
            </div>
            <div class="authorsList">
                <ul>
                    <li>၁။ ဝင်းဦး</li>
                </ul>
            </div>
        </div>

        <!-- သ အက္ခရာဖြင့်စသော စာရေးဆရာများ -->
        <div class="box">
            <div class="alphabetList" id="alphabet30">
                သ အက္ခရာဖြင့်စသော စာရေးဆရာများ
            </div>
            <div class="authorsList">
                <ul>
                    <li>၁။ သိန်းဖေမြင့် </li>
                    <li>၂။ သိပ္ပံမောင်ဝ</li>
                    <li>၃။ သိုးဆောင်း</li>
                    <li>၄။ သော်တာဆွေ</li>
                </ul>
            </div>
        </div>

        <!-- ဟ အက္ခရာဖြင့်စသော စာရေးဆရာများ -->
        <div class="box">
            <div class="alphabetList" id="alphabet31">
                ဟ အက္ခရာဖြင့်စသော စာရေးဆရာများ
            </div>
            <div class="authorsList">
                <ul>
                    <li>၁။ ဟမ်စိုင်း(ဆေး-မန်း)</li>
                    <li>၂။ ဟိန်းလတ် </li>
                </ul>
            </div>
        </div>

        <!-- အ အက္ခရာဖြင့်စသော စာရေးဆရာများ -->
        <div class="box">
            <div class="alphabetList" id="alphabet33">
                အ အက္ခရာဖြင့်စသော စာရေးဆရာများ
            </div>
            <div class="authorsList">
                <ul>
                    <li>၁။ အကြင်နာမွန်</li>
                    <li>၂။ အောင်မေဃ</li>
                    <li>၃။ အောင်လှိုင်</li>
                    <li>၄။ အောင်သင်း</li>
                    <li>၅။ အောင်အေး(ရန်ကုန်တက္ကသိုလ်)
                </ul>
            </div>
        </div>

        <!-- ဥ အက္ခရာဖြင့်စသော စာရေးဆရာများ -->
        <div class="box">
            <div class="alphabetList" id="alphabet34">
                ဥ အက္ခရာဖြင့်စသော စာရေးဆရာများ
            </div>
            <div class="authorsList">
                <ul>
                    <li>၁။ ဦးနု</li>
                    <li>၂။ ဦးဘုန်း(ဓါတု)</li>
                    <li>၃။ ဦးသော်ဇင်-14(Dhamma)</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- FOOTER -->
    <div class="footer ">
        <div class="">@YadanarThike 2022</div>
        <div class="copyright">&#169;
            YadanarThike Company. All Rights Reserved.</div>
    </div>
</body>

</html>