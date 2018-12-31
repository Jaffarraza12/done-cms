<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="container" style="margin-bottom:50px">

    <h2>Contact Us Page</h2>
    <div class="row">
        <div class="col-md-8">
            <div class="well well-sm">
                <form>
                    <div class="row">
                        <div class="col-md-6" style="float: right">
                            <div class="form-group">
                                <label for="name">
                                    اسم</label>
                                <input type="text" class="form-control" id="name" placeholder="اسم" required="required">
                            </div>
                            <div class="form-group">
                                <label for="email">
                                    البريد الإلكتروني</label>
                                <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                    <input type="email" class="form-control" id="email" placeholder="البريد الإلكتروني
" required="required"></div>
                            </div>
                            <div class="form-group">
                                <label for="subject">
                                    موضوع</label>
                                <select id="subject" name="subject" class="form-control" required="required" style="text-align: right;direction: rtl">
                                    <option value="na" selected="">اختر واحد
                                    </option>
                                    <option value="service">خدمة العملاء العامة
                                    </option>
                                    <option value="suggestions">اقتراح</option>
                                    <option value="product">الدعم
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6" style="float: right">
                            <div class="form-group">
                                <label for="name">
                                    رسالة</label>
                                <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required" placeholder="رسالة"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12" style="background: transparent">
                            <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                                ارسل رسالة
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <p style="text-align:right">

                جمعية أم المؤمنين</p>

            <p style="text-align:right"> <i class="fas fa-home"></i>             ص.ب: 170 عجمان</p>

            <p style="text-align:right">     <i class="fas fa-location-arrow"></i>    دولة الإمارات العربية المتحدة</p>

            <p style="text-align:right">00971
                <i class="fas fa-phone"></i>                      - تحويلة: 20 </p>

            <p style="text-align:right">00971
                <i class="fas fa-fax"></i></p>

            <p style="text-align:right">rshaward@http://operaartproduction.com<i class="far fa-envelope"></i></p>
        </div>

        <style>

            #content-boxes {}
            #content-boxes div.col-md-12 img {
                width:100%;
            }
            #content-boxes div.col-md-12 div.col-md-12 {
                background-color: #FFFFFF;
            }
            #content-boxes div.col-md-12 h2 {
                margin: 30px 0 20px 0;
            }

            .well-sm {
                padding: 9px;
                border-radius: 3px;
            }
            .well {
                min-height: 20px;
                padding: 19px;
                margin-bottom: 20px;
                background-color: #f5f5f5;
                border: 1px solid #e3e3e3;
                border-radius: 4px;
                -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.05);
                box-shadow: inset 0 1px 1px rgba(0,0,0,.05);
            }
        </style>
    </div>
</div>