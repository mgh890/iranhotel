<div class="sidebar-content">

    <!-- User menu -->
    <div class="sidebar-user">
        <div class="category-content">
            <div class="media">

                    <a href="#"  style="padding-left:10px;" class="media-left"><img src="{{url('resources/assets/images/placeholder.jpg')}}" class="img-circle img-sm" alt=""></a>
                    <div class="media-body">
                        <span class="media-heading text-semibold">جواد رستگار مقدم</span>
                        <div class="text-size-mini text-muted">
                            <i class="icon-user text-size-small"></i><a style="color: #26A69A;" href="mailto:sobat.ir@gmail.com"> &nbsp;sobat.ir@gmail.com</a>
                        </div>
                    </div>

            </div>
        </div>
    </div>
    <!-- /user menu -->
    <!-- Main navigation -->
    <div class="sidebar-category sidebar-category-visible">
        <div class="category-content no-padding">
            <ul class="navigation navigation-main navigation-accordion">

                <!-- Main -->
                <li class="active"><a href="index.html"><i class="icon-home4"></i> <span>میزکار</span></a></li>
                <li>
                    <a href="#"><i class="icon-stack"></i> <span>مدیریت زبان </span></a>
                    <ul>
                        <li><a href="{{ url('admin/'.session()->get('isoCode').'/language/create') }}">افزودن زبان جدید</a></li>
                        <li><a href="{{ url('admin/'.session()->get('isoCode').'/language') }}">لیست زبان ها  </a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-pencil3"></i> <span>مدیریت پکیج</span></a>
                    <ul>
                        <li><a href="{{ url('admin/'.session()->get('isoCode').'/package/create') }}">ایجاد پکیج</a></li>
                        <li><a href="{{ url('admin/'.session()->get('isoCode').'/package') }}">لیست پکیج</a></li>
                        <li><a href="{{ url('admin/'.session()->get('isoCode').'/packageservices') }}">تعریف خدمات</a></li>



                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-pencil3"></i> <span>مدیریت هتل</span></a>
                    <ul>
                        <li><a href="{{ url('admin/'.session()->get('isoCode').'/hotel') }}">تعریف هتل</a></li>
                        <li><a href="{{ url('admin/'.session()->get('isoCode').'/city') }}">تعریف شهر</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-pencil3"></i> <span>مدیریت مطالب</span></a>
                    <ul>
                        <li><a href="{{ url('admin/'.session()->get('isoCode').'/article/create') }}">ایجاد مطلب</a></li>
                        <li><a href="{{ url('admin/'.session()->get('isoCode').'/article') }}">لیست مطالب</a></li>

                    </ul>
                </li>




                <li>
                    <a href="#"><i class="icon-stack"></i> <span>Starter kit</span></a>
                    <ul>
                        <li><a href="starters/1_col.html">1 column</a></li>
                        <li>
                            <a href="#">3 columns</a>
                            <ul>
                                <li><a href="starters/3_col_dual.html">Dual sidebars</a></li>
                                <li><a href="starters/3_col_double.html">Double sidebars</a></li>
                            </ul>
                        </li>
                        <li class="navigation-divider"></li>
                        <li><a href="starters/layout_navbar_fixed_main.html">Fixed main navbar</a></li>
                    </ul>
                </li>
                <!-- /main -->

            </ul>
        </div>
    </div>
    <!-- /main navigation -->

</div>
