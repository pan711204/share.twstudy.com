<!DOCTYPE html>
<html lang="zh-tw">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="keywords" content="行動學習科技-行動夥伴網">
<meta name="description" content="行動學習科技-行動夥伴網">
<title>行動學習科技-行動夥伴網</title>
<!-- Favicon -->
<link href="favicon.ico" rel="icon">
<link href="favicon.ico" rel="shortcut icon">
<link href="apple-touch-icon.png" rel="apple-touch-icon">
<!-- CSS RWD Core -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<!-- CSS Plugins -->
<link href="assets/css/font-awesome.min.css" rel="stylesheet">
<!-- CSS Customization -->
<link href="assets/css/layout.css" rel="stylesheet">
<link href="assets/css/custom_member_register_notmember.css" rel="stylesheet">
<link href="assets/css/plugin-slick.min.css" rel="stylesheet">
</head>
<body data-page="inner">
<?php include('page_header.php'); ?>
<div class="g-wrap">
  <div class="page-ban">
    <img class="img showrole scroll-fade" src="assets/images/ban-register.jpg" alt="行動學習科技-行動夥伴網">
    <div class="words">
      <div class="title showrole scroll-fade-up">
        <p class="zh">夥伴們，歡迎開始賺獎金行動...</p>
      </div>
    </div>
  </div>
  <div class="main">
    <div class="container-1400 container clearfix">
      <?php include('page_breadcrumb.php'); ?>
      <div class="content">
        <div class="inner-content" data-plugin="scroll-view">
          <h3 class="subtitle"><span>您將同時成為「行動補習網」的會員，</span><span>在二個網站共用同一組帳號、密碼</span></h3>
          <form action="member_register_vertify_sent.php" name="form_register">
            <div class="form-box">
              <span class="label-style"><i class="star">*</i>帳號</span>
              <input type="text" name="account" class="input-style" placeholder="請輸入帳號 (手機號碼或Email)">
            </div>

            <div class="form-box">
              <span class="label-style"><i class="star">*</i>密碼</span>
              <input type="password" name="pwd" class="input-style" placeholder="請輸入密碼">
            </div>

            <div class="form-box">
              <span class="label-style"><i class="star">*</i>確認密碼</span>
              <input type="password" name="pwd_conf" class="input-style" placeholder="請再輸入一次密碼">
            </div>

            <div class="form-box code">
              <div class="label-style"><i class="star">*</i>驗證碼</div>
              <input type="text" name="captcha" id="contact_code" class="input-style" placeholder="請輸入驗證碼">
              <a href="javascript:void(0);" title="點擊更換驗證碼" class="codeimg"><img src="assets/images/del/code.jpg" alt="驗證碼"></a>
            </div>

            <div class="form-box term">
              <div class="label-style"><i class="star">*</i>加入前請詳閱會員條款</div>
              <article class="term-box">
                <h3>行動夥伴網 使用條款 <i>2018/3/28</i></h3>
                <p>「行動夥伴網」提供使用者其針對推廣銷售「行動補習網」課程所得獎金的查詢以及請領服務。所有申請成為「夥伴會員」的使用者，都應該詳細閱讀下列使用條款。使用者完成會員註冊手續，即視為已知悉、並完全遵守下列使用條款的所有約定。 </p>
                <p>我們要求您詳閱這些政策，並經常參閱此文件。如果您未遵守這些政策，我們會停止您的權益或停用您的帳戶。雖然在大多數情況下，我們會配合行動夥伴以確保他們能夠確實遵守政策，但我們保留隨時停用任何帳戶的權利。如果您的帳戶已停用，之後將無法再加入「行動夥伴」計畫，並且無法領取包括但不限於未發生或已發生的紅利、獎金、贈品或獎勵。</p>
                <p>請注意，我們隨時可能變更我們的政策，而根據條款及細則的規定，您有責任隨時掌握此處張貼的最新政策並加以遵守。</p>

                <h4>名詞定義</h4>
                <p>「本服務」：係指「行動夥伴網」系統服務。<br>
                「本公司」：係指「行動學習科技股份有限公司」，負責營運「行動補習網」及「行動夥伴網」，所有網頁設計、介面、URL、商標或標識、電腦程式、資料庫等，其商標、著作權、其他智慧財產權及資料所有權等，均屬於本公司所有。<br>
                「夥伴會員」：係指完成本服務註冊手續的使用者。<br>
                「行動補習網」：係指本公司所營運之線上課程平臺，包括課程銷售、課程說明及服務、訂單之審查、處理、出貨、開立發票等作業均由本公司負責處理。<br>
                「消費者」：係指購買「行動補習網」線上課程的網路使用者。<br>
                「課程產品」：係指「行動補習網」所銷售之課程。<br>
                「專屬推廣網址」：當完成「行動夥伴網」會員註冊並登錄帳號後，會員將於網站上取得一組該會員專屬的推廣網址，該網址將聯結「行動補習網」首頁，任何消費者以此「專屬推廣網址」進入「行動補習網」完成產品購買並付款完成，該會員可從該筆產品消費中獲得推廣獎金。<br>
                </p>

                <h4>行動夥伴合作模式及限制</h4>
                <p>夥伴會員將自己的「專屬推廣網址」分享給親友，課程內容說明及售後服務由「行動補習網」課輔人員提供，惟本公司保留接單與否的權利。<br>
                夥伴會員有義務告知其親友：要從「專屬推廣網址」進入行動補習網購買產品，夥伴會員才會獲得銷售獎金。<br>
                課程產品約定價格以「行動補習網」之網站售價為準，夥伴會員應於推廣前應先充份了解課程產品售價。<br>
                「行動補習網」課程產品變價不另行通知，夥伴會員應自行留意「行動補習網」上課程之售價變動。<br>
                專案經銷：夥伴會員可針對單一產品與機關團體進行專案合作計畫，或以保證包量方式，並提出具體之書面企畫(應述明目的、合作對象、數量等)送本公司審核，本公司提供折扣另議。惟該專案銷售金額單獨列計，不併入本服務獎金計算。<br>
                </p>

                <h4>推廣獎金計算方式</h4>
                <p>獎金計算標的：<br>
                必須是經由該夥伴會員的「專屬推廣網址」進入行動補習網所購買的課程產品。<br>
                若由本公司人員主動追蹤消費者、或消費者經由其它非專屬推廣網址之途徑進入行動補習網購買課程產品，則不列入夥伴會員業績。<br>
                訂單需已付款完成才能列入獎金計算，分期、退費、延期不列入獎金計算。<br>
                </p>
                <p>獎金計算方式：<br>
                每筆訂單金額X10%＝獎金，若另有專案或特別活動，則另行規定。<br></p>
                <p>獎金請領方式：<br>
                夥伴會員每月15-25日可針對上個月以前的獎金進行請款，如12/15-12/25可請領11月(含)以及前期未請領的獎金。<br></p>
                <p>首次請款應完成流程：<br>
                (1)完成手機驗證。<br>
                (2)填寫帳戶資訊（指定匯入銀行帳戶之戶名必須與夥伴會員姓名相同），並將個人身份證正反面影本上傳，本服務會進行審核。<br>
                (3)會員資料需通過審核。<br>
                單次獎金金額需滿NT$500才可請領，未滿NT$500將併入下期獎金。<br>
                獎金需一次請領，不得分次請領。<br>
                本公司扣除以下費用後，將佣金匯入指定之銀行帳戶<br>
                (1)匯款手續費30元。<br>
                (2)個人所得稅：依中華民國稅法規定，單次超過NT$20,001(含)以上，本公司需代為扣繳10%稅款。<br>
                (3)二代健保補充保費：若單次請款金額超過20,000(含)元，須扣除1.91%。<br>
                (4)其他罰款或衍生費用。<br>
                夥伴會員所獲得之紅利、獎金、贈品或獎勵，將由本公司向國稅局申報，金額將會併入會員個人所得。<br></p>
                <p>獎金匯款：<br>
                每月20、25二日本公司進行獎金匯款(遇例假日順延)，只針對提出請款要求的會員進行匯款，未提出請款要求者不主動匯款。<br>
                每筆獎金匯款需預扣30元手續費。<br></p>
                <p>獎金溢領：<br>
                遇有已領取獎金而消費者要求退課退費之情況，夥伴會員應於消費者退費日起10日內歸還溢領之獎金；若有逾期未歸還獎金者，本服務得取消夥伴會員之帳號，並且取消發放包括但不限於未發生或已發生的紅利、獎金、贈品或獎勵。<br>
                如對撥發獎金之內容有疑義，夥伴會員應於發生日起算30日內提出異議，本公司應配合進行對帳，以釐清帳目並補回相關差額，逾時視同棄權。<br>
                如有合理事實足認夥伴會員行為有違約之可能時，本公司有權逕對夥伴會員之獎金暫時停止發放，直到完成調查為止。夥伴會員同意退回溢領之獎金，並授權本公司直接自夥伴會員應得之獎金中扣除；若有不足者，夥伴會員應於10日內以現金返還本公司。<br></p>

                <h4>夥伴會員</h4>
                <p>本服務不得重複註冊多組帳號，不得冒用他人身分使用本服務，一經發現，本公司得隨時暫停或終止冒用人的所有帳戶。<br> 
                夥伴會員於請領獎金時須填入完整而正確的個人基本資料。本公司會保護每一位使用者的隱私，除了可能涉及違法、侵權、違反本使用條款、違反行動補習網會員條款、中華民國法律或經本人同意以外，本公司不會任意監視、增刪、修改或關閉，或將個人資料及會員檔案內容交予第三者。 <br>
                夥伴會員應自行妥善保管所設定之帳號及密碼，且不應將其帳號及密碼透露或提供給第三人知悉、或出借或轉讓他人使用。對於所有使用該帳號及密碼登入本服務或相關系統所進行的一切行為，都視為申請使用該帳號及密碼之夥伴會員的行為，並應由該夥伴會員對該等資料及行為自行負責。<br></p> 

                <h4>推廣注意事項與懲處規範</h4>
                <p>夥伴會員若有下列事項，只要一經發現或有人檢舉查證屬實後，本公司將停止夥伴會員的權利，停權標準依照其違規事件輕重，將施行停權二個月以上至終身永久停權。會員停權期間所有獎金將歸零且不得請領，若因此造成本公司及相關人的損失，將會追究法律及賠償責任。<br>
                削價販賣商品：利用任何管道、網頁露出與行動補習網頁面不同的課程售價，包含但不限於降價自售、或自行提供贈品吸引網友訂購或是自行拆售的單組與套組售價等行為。<br>
                騷擾式行銷<br>
                濫發垃圾郵件。<br>
                大量濫發廣告文章於他人網站。<br>
                於討論區、留言板大量發文洗版。<br>
                使用軟體大量發送廣告(例如：衝人氣軟體、發文程式、郵件程式、即時通訊軟體工具..等)。<br>
                非經對方同意，大量張貼或傳遞廣告訊息給對方，經對方檢舉屬實。<br>
                自行編寫不實廣告或違反法規的內容<br>
                誇大不實的廣告內容。<br>
                不當引用未經授權或證實的廣告內容。<br>
                </p>
                <p>
                *提醒：若要宣傳課程商品，引用的內容請以行動補習網提供的課程文案內容為準，請勿自行添加，若因個人行為而遭到罰款，則必須由您自行承擔。<br>
                侵犯他人智慧財產權、專利權、隱私權<br>
                製造冒名或幾可亂真的假網頁，或是盜用行動補習網整站內容製作網頁。<br>
                假冒行動補習網身份，自行以行動補習網官網網址刊登關鍵字廣告。<br>
                使用行動補習網企業名稱或其他混淆文字，使網友誤認為官方平台。<br>
                假借競爭廠商名號，讓網友誤入網頁後，實際是宣傳行動補習網的課程。<br>
                </p>
                <p>
                *提醒：<br>
                依著作權法規定引用行動補習網文章或課程內容時，須註明資料來源出處，但夥伴會員不因此而取得「行動補習網」與「行動夥伴網」相關商標、著作權或其他智慧財產權之授權。<br>
                若您要引用其他人的部落格或網站上的文章，請您務必先徵求作者或資料所有權人同意，才可取用張貼，同樣必須註明內容的來源；如果您未經授權同意就取用他人文章張貼推廣，則可能觸犯了著作權法或智慧財產權法的規定。<br>
                盜用企業商標(商標得以文字、圖形、記號、顏色、聲音、立體形狀或其聯合式所組成)，做為牟利使用，則會觸犯商標法規定，若經企業檢舉屬實，將由司法單位介入提調會員資料進行到案偵查，還請夥伴會員自重。<br>
                </p>
                <p>
                警告及停權說明：<br>
                警告：以email或簡訊通知違規事由，並請24小時內改善。 <br>
                除權：以email或簡訊通知違規事由，帳號終身停權，所有獎金不得請領。(過去違規推廣的獎金將一併扣回)。獎金不得請款的會員，本公司並保留此違規推廣朔及既往的款項追討權利。<br>
                以下違規或違法行為，將會被列為重大違規事項，經舉報或發現一次屬實將永久停權，請各位夥伴會員務必注意<br>
                只有在消費者有意試聽或是購買課程時，可以導引其至行動補習網進行註冊成為會員。其它假借獎勵或任何名義誘導網友填寫資料、名單等均視為詐騙行為。<br>
                使用作弊方式，蓄意詐領獎金或獎品者。<br>
                不可冒用行動補習網名義對外進行任何非授權的行為(例如：註冊帳號、徵才、貸款…等)<br>
                </p>

                <h4>服務暫停及終止</h4>
                <p>如有下列情形，本公司得隨時暫停或中斷本服務之全部或一部，且對夥伴會員因此所生之任何直接或間接損害，夥伴會員不得因此而要求任何賠償或補償。本公司保留隨時修改本服務中各項功能之全部或一部之權利。<br>
                對本服務相關軟硬體設備進行搬遷、更換、升級、保養或維修時。<br>
                夥伴會員有違反法令、本使用條款、本服務說明或本服務準則之情形。<br>
                因第三人之行為、天災、事變或其他不可抗力所致之服務停止或中斷。<br>
                依相關法令規定或有權機關之要求所為之停止或中斷。<br>
                其他不可歸責於本公司之事由所致之服務停止或中斷。<br> 
                </p>

                <h4>使用條款之適用與修正與免責聲明</h4>
                <p>本公司保留隨時修改本使用條款的權利，修改後的使用條款及相關規範，將公佈在本服務網站上，本公司不另行個別通知推廣者。<br>
                行動夥伴網僅依本服務當時之功能及現況提供使用，對於夥伴會員之特定要求或需求，包括但不限於速度、安全性、可靠性、完整性、正確性及不會斷線或出錯等，本公司不作任何明示或默示之擔保或保證。<br></p>

                <h4>準據法及管轄權</h4>
                <p>本使用條款之解釋、補充及適用，均以中華民國法令為準據法。<br>
                因本使用條款所生之爭議，雙方同意以台灣臺南地方法院為第一審管轄法院。<br></p>
              </article>
            </div>

            <div class="form-agree">
              <label class="checkbox-style" for="agree_policy"><input type="checkbox" name="agree_policy" value="" id="agree_policy"><span><i></i></span>我已詳讀並同意</label>
              行動夥伴網的會員使用條款、<a href="privacy.php" title="隱私權政策" target="_blank">隱私權政策</a>，並同意由行動夥伴網及行動補習網接收相關的信件或簡訊通知
            </div>

            <div class="form-agree">
              <label class="checkbox-style" for="is_adult"><input type="checkbox" name="is_adult" value="" id="is_adult"><span><i></i></span>未滿18歲的會員，需取得家長同意。我同意且已取得家長同意。</label>
            </div>          

            <div class="btn-wrap">
              <button type="reset" class="btn-default btn-reset" title="清除重填"><span>清除重填</span></button>
              <button type="submit" class="btn-default btn-submit" title="確認送出"><span>確認送出</span></button>
            </div>
            
          </form>

        </div>
      </div>
  </div>
</div>
<?php include('page_footer.php'); ?>
<script src="assets/js/plugins/jQuery/jquery-2.2.4.min.js"></script>
<script src="assets/js/plugins/jQuery/jquery.mobile-1.4.5.custom.min.js"></script>
<script src="assets/js/plugins/jQuery/jquery.mobiledetect-1.3.6.min.js"></script>
<script src="assets/js/plugins/Bootstrap/bootstrap-4.0.0.min.js"></script>
<script src="assets/js/plugins/jQuery/jquery.scrollview-1.4.min.js"></script>
<script src="assets/js/plugins/jQuery/jquery.easing-1.4.min.js"></script>
<script src="assets/js/plugins/jQuery/jquery.parallax-1.5.0.min.js"></script>
<script src="assets/js/plugins/jQuery/jquery.mCustomScrollbar-3.1.5.min.js"></script>
<script src="assets/js/common.js"></script>
<script>
  $(document).ready(function(e) {
    // Scroll View
    $('[data-plugin="scroll-view"]').scrollView({
      threshold: -150,
    });
  });
</script>
</body>
</html>