<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="5Vyrh1i38VuZqCT6wF_6l7vu9rFENBrnUGr9wlBCX1U" />
        <title>Medicare System</title>
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
        body { background-color: #f1f5f9; color: #334155; display: flex; flex-direction: column; min-height: 100vh; }
        header { background-color: #047857; color: white; padding: 15px 20px; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1); }
        .header-container { max-width: 1200px; margin: 0 auto; display: flex; justify-content: space-between; align-items: center; }
        .logo-area { display: flex; align-items: center; gap: 12px; }
        .logo-img { width: 48px; height: 48px; border-radius: 50%; object-fit: cover; border: 2px solid #6ee7b7; background: white; }
        .logo-icon-default { background: #10b981; width: 48px; height: 48px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 22px; }
        .clock-box { background: rgba(255, 255, 255, 0.15); padding: 6px 14px; border-radius: 20px; font-size: 13px; font-weight: bold; border: 1px solid rgba(255,255,255,0.2); text-align: center; }
        .user-info { background: #065f46; padding: 6px 16px; border-radius: 20px; display: flex; align-items: center; gap: 10px; font-size: 14px; }
        .badge { background: #6ee7b7; color: #064e3b; padding: 2px 8px; border-radius: 12px; font-weight: bold; font-size: 12px; }
        main { max-width: 1100px; width: 95%; margin: 25px auto; flex-grow: 1; }
        .card { background: white; padding: 25px; border-radius: 12px; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05); border: 1px solid #e2e8f0; margin-bottom: 20px; }
        h2 { margin-bottom: 15px; color: #0f172a; font-size: 20px; border-bottom: 2px solid #ecfdf5; padding-bottom: 8px; }
        .form-group { margin-bottom: 15px; }
        label { display: block; font-weight: 600; margin-bottom: 6px; font-size: 15px; color: #475569; }
        input, select, textarea { width: 100%; padding: 12px; border: 1px solid #cbd5e1; border-radius: 8px; font-size: 15px; outline: none; }
        input:focus, select:focus, textarea:focus { border-color: #10b981; box-shadow: 0 0 0 3px rgba(16, 185, 129, 0.2); }
        .phone-input, .id-input { dir: ltr; text-align: right; unicode-bidi: plaintext; }
        .btn { background: #059669; color: white; border: none; padding: 12px 24px; border-radius: 8px; font-weight: bold; cursor: pointer; font-size: 15px; display: inline-block; }
        .btn:hover { background: #047857; }
        .btn-blue { background: #2563eb; color: white; }
        .btn-blue:hover { background: #1d4ed8; }
        .btn-orange { background: #d97706; color: white; border: none; padding: 6px 12px; border-radius: 6px; cursor: pointer; font-size: 13px; font-weight: bold; }
        .btn-orange:hover { background: #b45309; }
        .btn-red { background: #ef4444; color: white; border: none; padding: 6px 12px; border-radius: 6px; cursor: pointer; font-size: 13px; font-weight: bold; }
        .btn-red:hover { background: #dc2626; }
        .grid-2 { display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 15px; }
        .grid-3 { display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 15px; }
        .grid-4 { display: grid; grid-template-columns: repeat(auto-fit, minmax(180px, 1fr)); gap: 15px; }
        .nav-bar { display: flex; gap: 10px; background: white; padding: 10px; border-radius: 10px; box-shadow: 0 2px 4px rgba(0,0,0,0.05); margin-bottom: 20px; overflow-x: auto; }
        .nav-btn { background: #f1f5f9; border: none; padding: 12px 18px; border-radius: 8px; font-weight: bold; color: #475569; cursor: pointer; white-space: nowrap; position: relative; font-size: 15px; }
        .nav-btn.active { background: #059669; color: white; }
        
        .nav-badge { background-color: #ef4444; color: white; font-size: 11px; font-weight: bold; padding: 2px 7px; border-radius: 10px; margin-right: 6px; display: inline-block; }
        .queue-badge { background-color: #3b82f6; color: white; font-size: 12px; font-weight: bold; padding: 3px 8px; border-radius: 6px; margin-left: 5px; }

        .stat-card { background: white; padding: 15px; border-radius: 10px; border: 1px solid #e2e8f0; text-align: center; }
        .stat-number { font-size: 22px; font-weight: bold; margin-top: 5px; color: #059669; }
        table { width: 100%; border-collapse: collapse; margin-top: 15px; }
        th, td { padding: 12px; text-align: right; border-bottom: 1px solid #e2e8f0; font-size: 14px; }
        th { background: #f8fafc; color: #64748b; }
        .hidden { display: none !important; }
        .login-box { max-width: 400px; margin: 40px auto; }
        .med-box { background: #f8fafc; padding: 15px; border-radius: 8px; border: 1px solid #e2e8f0; }

        .search-container { position: relative; margin-bottom: 15px; }
        .med-item { display: flex; align-items: center; justify-content: space-between; gap: 8px; background: white; padding: 12px 16px; border-radius: 8px; border: 1px solid #cbd5e1; cursor: pointer; transition: 0.2s; user-select: none; font-size: 15px; font-weight: bold; }
        .med-item:hover { border-color: #10b981; background: #f0fdf4; }
        .med-item.out-of-stock { background: #fef2f2; border-color: #fca5a5; opacity: 0.7; }
        .med-item input[type="checkbox"] { width: 22px; height: 22px; cursor: pointer; }
        .med-qty-select { width: 70px; padding: 4px 6px; border-radius: 6px; border: 1px solid #10b981; font-weight: bold; font-size: 14px; background: #ecfdf5; color: #047857; text-align: center; }

        .pharmacy-card { background: #ffffff; border: 2px solid #0284c7; padding: 18px; border-radius: 10px; margin-bottom: 15px; }
        .notes-text { background: #f0f9ff; color: #0369a1; padding: 10px; border-radius: 6px; border-right: 4px solid #0284c7; font-size: 16px; font-weight: bold; margin-top: 8px; }

        @media print {
            header, .nav-bar, .btn, .no-print, .btn-red, .btn-blue, .btn-orange { display: none !important; }
            body { background: white; }
            .card { box-shadow: none; border: none; }
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header>
        <div class="header-container">
            <div class="logo-area">
                <div id="logoContainer">
                    <div class="logo-icon-default">🏥</div>
                </div>
                <div>
                    <h1 id="hospitalNameDisplay" style="font-size:20px; font-family:'Segoe UI', sans-serif;">Medicare</h1>
                    <p style="font-size:11px; opacity: 0.8;">Management & Real-time Database System</p>
                </div>
            </div>

            <div class="clock-box">
                <div id="liveDate" style="color: #6ee7b7; font-size: 11px; margin-bottom: 2px;">--</div>
                <div id="liveTime" style="font-size: 15px;">--:--:--</div>
            </div>
            
            <div id="userInfo" class="user-info hidden">
                <span id="userBadge" class="badge">مدير</span>
                <span id="userName">المدير العام</span>
                <button onclick="logout()" style="background:none; border:none; color:#fca5a5; cursor:pointer; font-size:12px; font-weight:bold;">خروج 🚪</button>
            </div>
        </div>
    </header>

    <main>
        <!-- SCREEN 1: LOGIN -->
        <div id="screen-login" class="card login-box">
            <div style="text-align:center; margin-bottom:20px;">
                <div style="font-size:40px; margin-bottom:10px;">🔐</div>
                <h2>تسجيل دخول النظام</h2>
                <p style="font-size:12px; color:#64748b;">ادخل الحساب المعتمد لمتابعة العمل</p>
            </div>

            <div id="loginError" style="display:none; background:#fee2e2; color:#dc2626; padding:10px; border-radius:8px; font-size:13px; text-align:center; margin-bottom:15px; font-weight:bold;">
                اسم المستخدم أو كلمة المرور غير صحيحة!
            </div>

            <form onsubmit="handleLogin(event)">
                <div class="form-group">
                    <label>اسم المستخدم</label>
                    <input type="text" id="loginEmail" placeholder="أدخل اسم المستخدم" required>
                </div>
                <div class="form-group">
                    <label>كلمة المرور</label>
                    <input type="password" id="loginPassword" placeholder="أدخل كلمة المرور" required>
                </div>
                <button type="submit" class="btn" style="width:100%;">دخول للنظام 🚀</button>
            </form>
        </div>

        <!-- Navigation Bar -->
        <div id="appNav" class="nav-bar hidden">
            <button id="nav-reception" onclick="switchTab('reception')" class="nav-btn active">🎫 1. الاستقبال <span id="badge-reception" class="nav-badge hidden">0</span></button>
            <button id="nav-doctor" onclick="switchTab('doctor')" class="nav-btn">🩺 2. عيادة الطبيب <span id="badge-doctor" class="nav-badge hidden">0</span></button>
            <button id="nav-accountant" onclick="switchTab('accountant')" class="nav-btn">💳 3. المحاسبة <span id="badge-accountant" class="nav-badge hidden">0</span></button>
            <button id="nav-pharmacy" onclick="switchTab('pharmacy')" class="nav-btn">💊 4. الصيدلية والمخزن <span id="badge-pharmacy" class="nav-badge hidden">0</span></button>
            <button id="nav-admin" onclick="switchTab('admin')" class="nav-btn">📊 5. المدير والتقارير</button>
        </div>

        <!-- SCREEN 2: RECEPTION -->
        <div id="screen-reception" class="card hidden">
            <h2>🎫 حجز تذكرة دخول جديدة</h2>
            <form onsubmit="addPatientTicket(event)" class="grid-3">
                <div class="form-group">
                    <label>اسم المريض رباعي</label>
                    <input type="text" id="patientName" required placeholder="مثال: عاصم مصبح">
                </div>
                <div class="form-group">
                    <label>رقم الهوية</label>
                    <input type="text" id="patientID" class="id-input" required placeholder="مثال: 401234567">
                </div>
                <div class="form-group">
                    <label>رقم الجوال</label>
                    <input type="tel" id="patientPhone" class="phone-input" required placeholder="0599000000">
                </div>
                <div class="form-group">
                    <label>القسم المطلوب</label>
                    <select id="patientDept" required></select>
                </div>
                <div style="grid-column: span 2; display: flex; align-items: flex-end;">
                    <button type="submit" class="btn" style="width:100%;">إصدار تذكرة وتحديد رقم الدور</button>
                </div>
            </form>
        </div>

        <!-- SCREEN 3: DOCTOR -->
        <div id="screen-doctor" class="card hidden">
            <h2>🩺 معاينة المريض - <span id="doctorDeptTitle" style="color:#059669;">جميع الأقسام</span></h2>
            <div class="grid-2">
                <div class="form-group">
                    <label>اختر المريض (مرتبين حسب أولوية الوصول/الدور):</label>
                    <select id="docPatientSelect" onchange="handlePatientSelectionChange()">
                        <option value="">-- لا يوجد مرضى بالانتظار --</option>
                    </select>
                </div>
                <div class="med-box" style="text-align:center;">
                    <p style="font-size:12px; color:#64748b;">تنبيه الصوت 🔔:</p>
                    <p style="font-weight:bold; color:#059669; font-size:13px;">تنبيه مسموع بدقة عند وصول مريض</p>
                    <button type="button" onclick="playNotificationSound()" style="margin-top:6px; background:#e0f2fe; border:1px solid #0284c7; color:#0369a1; padding:3px 10px; border-radius:6px; font-size:11px; font-weight:bold; cursor:pointer;">🔊 تجربة جرس الصوت</button>
                </div>
            </div>

            <div class="form-group" style="margin-top:15px;">
                <label style="font-size:16px; color:#0f172a;">التشخيص / الملاحظات الطبية (ستظهر بوضوح بالصيدلية):</label>
                <textarea id="docNotes" rows="3" placeholder="اكتب التشخيص والتفاصيل والتعليمات هنا..." style="font-size:16px; font-weight:bold;"></textarea>
            </div>

            <div id="dentalServicesBox" class="med-box hidden" style="margin-bottom:15px; border-color:#0284c7; background:#f0f9ff;">
                <h3 style="color:#0369a1; font-size:16px; margin-bottom:10px;">🦷 إجراءات وخدمات قسم الأسنان:</h3>
                <div id="dentalServicesList" class="grid-3"></div>
                
                <div class="grid-2" style="margin-top:10px; background:white; padding:10px; border-radius:8px; border:1px solid #bae6fd;">
                    <div>
                        <label style="font-size:13px; color:#0369a1;">إضافة إجراء يدوي جديد:</label>
                        <input type="text" id="customDentalServiceName" placeholder="مثال: تقويم أسنان، خلع..." onkeydown="handleEnterCalculate(event)">
                    </div>
                    <div>
                        <label style="font-size:13px; color:#0369a1;">السعر الذي تريد حسابه (₪) [اضغط Enter للجمع]:</label>
                        <input type="number" id="customDentalServicePrice" placeholder="مثال: 10" onkeydown="handleEnterCalculate(event)" oninput="calculateLiveDoctorTotal()">
                    </div>
                </div>
            </div>

            <div class="search-container">
                <label style="color:#059669; font-weight:bold; font-size:16px;">🔍 بحث فوري عن الأدوية (اكتب أول حرف):</label>
                <input type="text" id="medSearchInput" oninput="filterDoctorMeds()" placeholder="مثال: اكتب 'ب' أو 'امو'..." style="border: 2px solid #10b981; font-weight:bold; font-size:16px;">
            </div>

            <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:8px;">
                <label style="font-size:16px;">اختر الأدوية المحددة والكمية المطلوبة:</label>
                <button type="button" onclick="selectAllMeds()" style="background:#e2e8f0; border:none; padding:6px 12px; border-radius:6px; font-size:13px; font-weight:bold; cursor:pointer;">تحديد الكل المتاح</button>
            </div>

            <div id="doctorMedList" class="grid-3 med-box" style="margin: 5px 0 15px 0; max-height:220px; overflow-y:auto;"></div>

            <div class="med-box" style="background:#ecfdf5; border-color:#10b981; margin-bottom:15px; text-align:center;">
                <span style="font-size:16px; font-weight:bold; color:#047857;">الإجمالي المحسوب حالياً للوصفة والإجراءات: </span>
                <span id="calculatedDoctorTotalDisplay" style="font-size:22px; font-weight:bold; color:#059669; margin-right:8px;">0 ₪</span>
            </div>

            <button onclick="sendToAccountant()" class="btn btn-blue" style="width:100%; font-size:17px;">إرسال الإجراء والوصفة للمحاسب والصيدلية 🚀</button>
        </div>

        <!-- SCREEN 4: ACCOUNTANT -->
        <div id="screen-accountant" class="card hidden">
            <h2>💳 الصندوق واستلام الدفعات وإجمالي وسائل الدفع للتراكمي</h2>

            <div class="grid-4" style="margin-bottom:20px;">
                <div class="stat-card" style="border-right: 4px solid #059669;">
                    <span style="font-size:12px; color:#64748b;">📱 جوال بي (Jawwal Pay)</span>
                    <div id="accStatJawwalPay" class="stat-number" style="color:#059669;">0 ₪</div>
                </div>
                <div class="stat-card" style="border-right: 4px solid #2563eb;">
                    <span style="font-size:12px; color:#64748b;">🏦 تطبيق بنك فلسطين</span>
                    <div id="accStatBank" class="stat-number" style="color:#2563eb;">0 ₪</div>
                </div>
                <div class="stat-card" style="border-right: 4px solid #7c3aed;">
                    <span style="font-size:12px; color:#64748b;">👛 محفظة إلكترونية</span>
                    <div id="accStatWallet" class="stat-number" style="color:#7c3aed;">0 ₪</div>
                </div>
                <div class="stat-card" style="border-right: 4px solid #d97706;">
                    <span style="font-size:12px; color:#64748b;">💵 دفع نقدي (كاش)</span>
                    <div id="accStatCash" class="stat-number" style="color:#d97706;">0 ₪</div>
                </div>
            </div>

            <div class="grid-2">
                <div class="form-group">
                    <label>اختر المريض للدفع:</label>
                    <select id="accSelect" onchange="calculateBill()">
                        <option value="">-- اختر مريض --</option>
                    </select>
                </div>
                <div class="med-box" style="background:#ecfdf5; text-align:center;">
                    <p style="font-size:13px; color:#047857;">المبلغ المطلوب (المحدد من الطبيب مباشرة):</p>
                    <input type="number" id="totalBillAmountInput" style="font-size:24px; font-weight:bold; color:#059669; text-align:center; border:2px solid #10b981; width:60%; margin-top:5px;" value="0">
                </div>
            </div>

            <div class="grid-3" style="margin-top:15px;">
                <div class="form-group">
                    <label>وسيلة الدفع</label>
                    <select id="payMethod">
                        <option value="جوال بي (Jawwal Pay)">جوال بي (Jawwal Pay)</option>
                        <option value="تطبيق بنك فلسطين">تطبيق بنك فلسطين</option>
                        <option value="محفظة إلكترونية">محفظة إلكترونية</option>
                        <option value="نقداً">دفع نقدي</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>رقم جوال المحول</label>
                    <input type="text" id="payPhone" class="phone-input" placeholder="059xxxxxxx">
                </div>
                <div class="form-group">
                    <label>رقم الوصل / الحوالة</label>
                    <input type="text" id="payRef" class="id-input" placeholder="Ref-100234">
                </div>
            </div>

            <div style="display:flex; gap:10px; margin-top:10px; flex-wrap:wrap;">
                <button onclick="processPayment()" class="btn" style="flex:2; font-size:16px;">تأكيد الدفع وتحويل للصيدلية 🚀</button>
                <button onclick="exportMonthlyPaymentsToExcel()" class="btn" style="background:#15803d; flex:1;">📥 تصدير ملخص الأيام Excel</button>
                <button onclick="window.print()" class="btn btn-blue" style="flex:1;">🖨️ طباعة التقرير / PDF جاهز</button>
            </div>
        </div>

        <!-- SCREEN 5: PHARMACY & INVENTORY -->
        <div id="screen-pharmacy" class="card hidden">
            <h2>💊 تسليم الأدوية والوصفات حسب ترتيب الوصول</h2>
            <div id="pharmacyList">
                <p style="text-align:center; color:#94a3b8; padding:20px;">لا توجد وصفات بانتظار الصرف</p>
            </div>

            <hr style="margin:25px 0; border:0; border-top:1px dashed #cbd5e1;">

            <h2>📦 إدارة مخزن الأدوية وتسعيرها وتتبع الاستهلاك (الصيدلي)</h2>
            <form onsubmit="addNewInventoryMed(event)" class="grid-3" style="background:#f8fafc; padding:15px; border-radius:10px; border:1px solid #e2e8f0; margin-bottom:15px;">
                <div class="form-group">
                    <label>اسم الدواء</label>
                    <input type="text" id="newInventoryMedName" placeholder="مثال: أوميبرازول 20mg" required>
                </div>
                <div class="form-group">
                    <label>السعر (شيكل ₪)</label>
                    <input type="number" min="1" id="newInventoryMedPrice" placeholder="10" required>
                </div>
                <div class="form-group">
                    <label>الكمية المتوفرة (العدد الإجمالي)</label>
                    <input type="number" min="1" id="newInventoryMedQty" placeholder="50" required>
                </div>
                <div style="grid-column: span 3;">
                    <button type="submit" class="btn" style="width:100%;">إضافة الدواء للمخزن ولـ قائمة الطبيب</button>
                </div>
            </form>

            <div style="display:flex; justify-content:space-between; align-items:center; margin-top:20px; margin-bottom:10px;">
                <h3 style="font-size:16px; color:#475569;">جدول حالة المخزن والاستهلاك اليومي:</h3>
                <div class="no-print" style="display:flex; gap:8px;">
                    <button onclick="exportInventoryToExcel()" class="btn" style="background:#15803d; padding:8px 14px; font-size:13px;">📥 تصدير تقرير المخزن لـ Excel</button>
                    <button onclick="window.print()" class="btn btn-blue" style="padding:8px 14px; font-size:13px;">🖨️ طباعة / PDF</button>
                </div>
            </div>

            <table id="inventoryPrintTable">
                <thead>
                    <tr>
                        <th>اسم الدواء</th>
                        <th>السعر المحدد</th>
                        <th>الكمية المتبقية</th>
                        <th>الكمية المصروفة اليوم</th>
                        <th>إجمالي الاستهلاك</th>
                        <th class="no-print">إجراءات (تعديل / حذف)</th>
                    </tr>
                </thead>
                <tbody id="inventoryTable"></tbody>
            </table>
        </div>

        <!-- SCREEN 6: ADMIN & REPORTS -->
        <div id="screen-admin" class="hidden">
            
            <div class="card no-print" style="border: 2px solid #10b981; background: #f0fdf4;">
                <h2>⚙️ إعدادات اسم والشعار الخاص بالمستشفى / العيادة (للأدمن)</h2>
                <div class="grid-2">
                    <form onsubmit="updateHospitalName(event)">
                        <div class="form-group">
                            <label>اسم المستشفى / العيادة:</label>
                            <input type="text" id="hospitalNameInput" placeholder="أدخل اسم العيادة أو المستشفى" required>
                        </div>
                        <button type="submit" class="btn" style="width:100%;">تحديث وحفظ الاسم بالنظام 💾</button>
                    </form>

                    <div>
                        <div class="form-group">
                            <label>رفع صورة الشعار (Logo) ليحفظ دائماً:</label>
                            <input type="file" id="logoFileInput" accept="image/*" onchange="uploadLogoFile(event)">
                        </div>
                        <button onclick="removeStoredLogo()" class="btn-red" style="width:100%; padding:10px; font-size:14px;">🗑️ حذف الشعار المحفوظ وإعادة الافتراضي</button>
                    </div>
                </div>
            </div>

            <div class="grid-4" style="margin-bottom:20px;">
                <div class="stat-card">
                    <span style="font-size:12px; color:#64748b;">إجمالي الحالات اليوم</span>
                    <div id="statPatients" class="stat-number">0</div>
                </div>
                <div class="stat-card">
                    <span style="font-size:12px; color:#64748b;">إجمالي الإيرادات الكلية التراكمية</span>
                    <div id="statIncome" class="stat-number">0 ₪</div>
                </div>
                <div class="stat-card">
                    <span style="font-size:12px; color:#64748b;">المصاريف والخصومات</span>
                    <input type="number" id="dailyExpensesInput" oninput="renderAdmin()" value="0" style="text-align:center; font-size:20px; font-weight:bold; color:#ef4444; border:1px solid #cbd5e1; border-radius:6px; margin-top:5px; width:90%;">
                </div>
                <div class="stat-card">
                    <span style="font-size:12px; color:#64748b;">صافي الأرباح المتبقي</span>
                    <div id="statProfit" class="stat-number" style="color:#2563eb;">0 ₪</div>
                </div>
            </div>

            <div class="card">
                <h2>💰 توزيع جميع الإيرادات حسب وسيلة الدفع / المحفظة لكافة الأيام</h2>
                <div class="grid-4">
                    <div class="stat-card" style="background:#f0fdf4;">
                        <span style="font-size:13px; color:#047857; font-weight:bold;">📱 جوال بي</span>
                        <div id="adminStatJawwalPay" class="stat-number" style="color:#059669;">0 ₪</div>
                    </div>
                    <div class="stat-card" style="background:#eff6ff;">
                        <span style="font-size:13px; color:#1e40af; font-weight:bold;">🏦 تطبيق بنك فلسطين</span>
                        <div id="adminStatBank" class="stat-number" style="color:#2563eb;">0 ₪</div>
                    </div>
                    <div class="stat-card" style="background:#f5f3ff;">
                        <span style="font-size:13px; color:#5b21b6; font-weight:bold;">👛 محفظة إلكترونية</span>
                        <div id="adminStatWallet" class="stat-number" style="color:#7c3aed;">0 ₪</div>
                    </div>
                    <div class="stat-card" style="background:#fffbeb;">
                        <span style="font-size:13px; color:#92400e; font-weight:bold;">💵 نقداً (كاش)</span>
                        <div id="adminStatCash" class="stat-number" style="color:#d97706;">0 ₪</div>
                    </div>
                </div>
            </div>

            <div class="card no-print">
                <h2>🏥 إضافة قسم طبي جديد بالنظام (مثل: ولادة، نساء، عظام)</h2>
                <form onsubmit="addNewDepartment(event)" class="grid-2">
                    <div class="form-group">
                        <label>اسم القسم الجديد</label>
                        <input type="text" id="newDeptName" placeholder="مثال: ولادة، عيون، عظام..." required>
                    </div>
                    <div style="display:flex; align-items:flex-end;">
                        <button type="submit" class="btn" style="width:100%; margin-bottom:15px;">إضافة القسم فوراً للنظام</button>
                    </div>
                </form>
                <h3 style="font-size:14px; color:#475569; margin-top:10px;">الأقسام المضافة حالياً:</h3>
                <div id="departmentsList" style="display:flex; gap:8px; flex-wrap:wrap; margin-top:8px;"></div>
            </div>

            <div class="card">
                <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:10px; flex-wrap:wrap; gap:10px;">
                    <h2>🩺 إحصائيات وعمل الأطباء (عدد الحالات والإيراد التراكمي)</h2>
                    <div class="no-print" style="display:flex; gap:8px;">
                        <button onclick="exportDoctorsToExcel()" class="btn" style="background:#15803d;">📥 تصدير إحصائيات الأطباء Excel</button>
                        <button onclick="window.print()" class="btn btn-blue">🖨️ طباعة / PDF</button>
                    </div>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>اسم الطبيب</th>
                            <th>عدد الحالات التي عولجت</th>
                            <th>إجمالي المبالغ والمبيعات</th>
                        </tr>
                    </thead>
                    <tbody id="doctorsStatsTable"></tbody>
                </table>
            </div>

            <div class="card">
                <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:10px; flex-wrap:wrap; gap:10px;">
                    <h2>📊 السجل المالي وترتيب الحالات الحية والتاريخية</h2>
                    <div class="no-print" style="display:flex; gap:8px;">
                        <button onclick="exportAllOperationsToExcel()" class="btn" style="background:#15803d;">📥 تصدير كشف العمليات Excel</button>
                        <button onclick="window.print()" class="btn btn-blue">🖨️ طباعة / PDF</button>
                        <button onclick="clearAllDataPermanently()" class="btn btn-red" style="padding:10px 15px;">🗑️ تفريغ كافة البيانات والبدء مجدداً</button>
                    </div>
                </div>

                <table>
                    <thead>
                        <tr>
                            <th>التاريخ الفعلي</th>
                            <th>رقم الدور</th>
                            <th>اسم المريض</th>
                            <th>القسم</th>
                            <th>الطبيب المعالج</th>
                            <th>وسيلة الدفع</th>
                            <th>رقم الوصل</th>
                            <th>المبلغ</th>
                            <th>حالة الطلب</th>
                        </tr>
                    </thead>
                    <tbody id="adminReportTable"></tbody>
                </table>
            </div>

            <div class="card no-print">
                <h2>👤 إدارة وتعين حسابات الموظفين والأطباء</h2>
                <form onsubmit="addUserByAdmin(event)" class="grid-3">
                    <div class="form-group">
                        <label>اسم المستخدم</label>
                        <input type="text" id="newUsername" placeholder="مثال: dr_ahmed" required>
                    </div>
                    <div class="form-group">
                        <label>كلمة المرور</label>
                        <input type="password" id="newUserPassword" placeholder="كلمة السر" required>
                    </div>
                    <div class="form-group">
                        <label>الصلاحية / التخصص</label>
                        <select id="newUserRole"></select>
                    </div>
                    <div style="grid-column: span 3;">
                        <button type="submit" class="btn btn-blue" style="width:100%;">إنشاء وتخزين الحساب</button>
                    </div>
                </form>

                <h3 style="margin-top:20px; font-size:15px; color:#475569;">الحسابات المفعلة بالنظام:</h3>
                <table>
                    <thead>
                        <tr>
                            <th>اسم المستخدم</th>
                            <th>الصلاحية / القسم</th>
                            <th>كلمة المرور</th>
                            <th>الإجراءات (حذف)</th>
                        </tr>
                    </thead>
                    <tbody id="usersTable"></tbody>
                </table>
            </div>
        </div>

    </main>

    <script>
        function updateClock() {
            const now = new Date();
            const dateOptions = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
            document.getElementById('liveDate').innerText = now.toLocaleDateString('ar-EG', dateOptions);
            document.getElementById('liveTime').innerText = now.toLocaleTimeString('ar-EG');
        }
        setInterval(updateClock, 1000);
        updateClock();

        function getStoredHospitalName() {
            return localStorage.getItem('clinic_hospital_name') || 'Medicare';
        }

        function renderStoredLogo() {
            const logoData = localStorage.getItem('clinic_hospital_logo');
            const logoContainer = document.getElementById('logoContainer');
            if (logoData) {
                logoContainer.innerHTML = `<img src="${logoData}" alt="Logo" class="logo-img">`;
            } else {
                logoContainer.innerHTML = `<div class="logo-icon-default">🏥</div>`;
            }
        }

        function uploadLogoFile(e) {
            const file = e.target.files[0];
            if (!file) return;

            const reader = new FileReader();
            reader.onload = function(event) {
                const img = new Image();
                img.onload = function() {
                    const canvas = document.createElement('canvas');
                    const ctx = canvas.getContext('2d');
                    const maxSize = 150;
                    let width = img.width;
                    let height = img.height;

                    if (width > height) {
                        if (width > maxSize) {
                            height *= maxSize / width;
                            width = maxSize;
                        }
                    } else {
                        if (height > maxSize) {
                            width *= maxSize / height;
                            height = maxSize;
                        }
                    }

                    canvas.width = width;
                    canvas.height = height;
                    ctx.drawImage(img, 0, 0, width, height);

                    const compressedBase64 = canvas.toDataURL('image/png');
                    try {
                        localStorage.setItem('clinic_hospital_logo', compressedBase64);
                        renderStoredLogo();
                        alert('تم ضغط وحفظ الشعار دائمًا بالنظام بنجاح!');
                    } catch (err) {
                        alert('حجم الصورة كبير جداً، يرجى اختيار صورة أصغر حافزاً للتخزين.');
                    }
                };
                img.src = event.target.result;
            };
            reader.readAsDataURL(file);
        }

        function removeStoredLogo() {
            if (confirm('هل تأكد من حذف الشعار المحفوظ والعودة للأيقونة الافتراضية؟')) {
                localStorage.removeItem('clinic_hospital_logo');
                renderStoredLogo();
                alert('تم حذف الشعار واستعادة الأيقونة الافتراضية.');
            }
        }

        function setHospitalNameDisplay() {
            const currentName = getStoredHospitalName();
            document.getElementById('hospitalNameDisplay').innerText = currentName;
            document.title = `${currentName} System`;
            const nameInput = document.getElementById('hospitalNameInput');
            if (nameInput) nameInput.value = currentName;
            renderStoredLogo();
        }

        function updateHospitalName(e) {
            e.preventDefault();
            const newName = document.getElementById('hospitalNameInput').value.trim();
            if(!newName) return;
            localStorage.setItem('clinic_hospital_name', newName);
            setHospitalNameDisplay();
            alert(`تم تغيير اسم المستشفى/العيادة بالنظام إلى (${newName}) بنجاح!`);
        }

        let selectedMedsState = {};
        let selectedMedsQtyState = {};
        let selectedDentalState = {};

        const defaultDepts = ['جلدية', 'أسنان', 'طب عام', 'باطنية', 'أطفال'];

        function getStoredDepartments() {
            const stored = localStorage.getItem('clinic_departments');
            if (!stored) {
                localStorage.setItem('clinic_departments', JSON.stringify(defaultDepts));
                return defaultDepts;
            }
            return JSON.parse(stored);
        }

        function saveDepartments(depts) {
            localStorage.setItem('clinic_departments', JSON.stringify(depts));
            renderDepartmentsUI();
        }

        function addNewDepartment(e) {
            e.preventDefault();
            const input = document.getElementById('newDeptName');
            const name = input.value.trim().replace('قسم', '').trim();
            if(!name) return;

            const depts = getStoredDepartments();
            if(depts.includes(name)) return alert('هذا القسم موجود بالفعل!');

            depts.push(name);
            saveDepartments(depts);
            alert(`تم إضافة (قسم ${name}) بنجاح والنظام جاهز الآن لحجز المرضى به وتوجيههم للطبيب.`);
            input.value = '';
        }

        function deleteDepartment(name) {
            if(confirm(`هل أنت تأكد من حذف قسم (${name})؟`)) {
                let depts = getStoredDepartments();
                depts = depts.filter(d => d !== name);
                saveDepartments(depts);
            }
        }

        function renderDepartmentsUI() {
            const depts = getStoredDepartments();

            const receptionSelect = document.getElementById('patientDept');
            if (receptionSelect) {
                const currentVal = receptionSelect.value;
                receptionSelect.innerHTML = depts.map(d => `<option value="${d}">قسم ${d}</option>`).join('');
                if (currentVal && depts.includes(currentVal)) {
                    receptionSelect.value = currentVal;
                }
            }

            const userRoleSelect = document.getElementById('newUserRole');
            if (userRoleSelect) {
                let docOptions = depts.map(d => `<option value="doctor_${d}">طبيب ${d}</option>`).join('');
                userRoleSelect.innerHTML = `
                    ${docOptions}
                    <option value="reception">استقبال</option>
                    <option value="accountant">محاسب</option>
                    <option value="pharmacy">صيدلي</option>
                `;
            }

            const deptBox = document.getElementById('departmentsList');
            if (deptBox) {
                deptBox.innerHTML = depts.map(d => `
                    <span class="badge" style="background:#e0f2fe; color:#0369a1; padding:6px 12px; font-size:13px; display:inline-flex; align-items:center; gap:6px;">
                        قسم ${d} 
                        ${!defaultDepts.includes(d) ? `<button onclick="deleteDepartment('${d}')" style="border:none; background:none; color:#ef4444; cursor:pointer; font-weight:bold;">✕</button>` : ''}
                    </span>
                `).join('');
            }
        }

        function playNotificationSound() {
            try {
                const AudioCtx = window.AudioContext || window.webkitAudioContext;
                if (!AudioCtx) return;
                const ctx = new AudioCtx();

                const osc1 = ctx.createOscillator();
                const gain1 = ctx.createGain();
                osc1.type = 'sine';
                osc1.frequency.setValueAtTime(880, ctx.currentTime);
                gain1.gain.setValueAtTime(0.8, ctx.currentTime);
                gain1.gain.exponentialRampToValueAtTime(0.001, ctx.currentTime + 0.4);
                osc1.connect(gain1);
                gain1.connect(ctx.destination);
                osc1.start(ctx.currentTime);
                osc1.stop(ctx.currentTime + 0.4);

                const osc2 = ctx.createOscillator();
                const gain2 = ctx.createGain();
                osc2.type = 'sine';
                osc2.frequency.setValueAtTime(659.25, ctx.currentTime + 0.15);
                gain2.gain.setValueAtTime(0.9, ctx.currentTime + 0.15);
                gain2.gain.exponentialRampToValueAtTime(0.001, ctx.currentTime + 0.7);
                osc2.connect(gain2);
                gain2.connect(ctx.destination);
                osc2.start(ctx.currentTime + 0.15);
                osc2.stop(ctx.currentTime + 0.7);
            } catch(e){}
        }

        function normalizeDept(dept) {
            if (!dept) return '';
            return dept.replace('قسم', '').trim();
        }

        const defaultDentalServices = [
            { name: 'حشوة عصب', price: 120 },
            { name: 'حشوة داخلية', price: 80 },
            { name: 'جسر أسنان', price: 300 },
            { name: 'تنظيف وتلميع أسنان', price: 50 },
            { name: 'خلع ضرس / سن', price: 60 }
        ];

        function renderDentalServices() {
            const container = document.getElementById('dentalServicesList');
            container.innerHTML = defaultDentalServices.map(s => {
                const isChecked = selectedDentalState[s.name] ? 'checked' : '';
                return `
                <label class="med-item" style="border-color:#7dd3fc;">
                    <span>${s.name} (${s.price} ₪)</span>
                    <input type="checkbox" value="${s.name}" data-price="${s.price}" class="dental-check" ${isChecked} onchange="selectedDentalState['${s.name}'] = this.checked; calculateLiveDoctorTotal();">
                </label>`;
            }).join('');
        }

        const defaultInventory = [
            { id: 1, name: 'اموكسيلين 500mg', price: 10, qty: 100, usedToday: 0, totalUsed: 0 },
            { id: 2, name: 'براسيتامول 500mg', price: 10, qty: 150, usedToday: 0, totalUsed: 0 },
            { id: 3, name: 'ايبروفين 400mg', price: 10, qty: 80, usedToday: 0, totalUsed: 0 },
            { id: 4, name: 'فيتامين C', price: 100, qty: 60, usedToday: 0, totalUsed: 0 }
        ];

        function getStoredInventory() {
            const stored = localStorage.getItem('clinic_inventory');
            if (!stored) {
                localStorage.setItem('clinic_inventory', JSON.stringify(defaultInventory));
                return defaultInventory;
            }
            return JSON.parse(stored);
        }

        function saveInventory(inv) {
            localStorage.setItem('clinic_inventory', JSON.stringify(inv));
        }

        function deleteInventoryMed(id) {
            if (confirm('هل أنت تأكد من حذف هذا الدواء من المخزن؟')) {
                let inventory = getStoredInventory();
                inventory = inventory.filter(i => i.id !== id);
                saveInventory(inventory);
                renderInventoryTable();
                renderDoctorMedList();
            }
        }

        function editInventoryMed(id) {
            const inventory = getStoredInventory();
            const med = inventory.find(i => i.id === id);
            if (!med) return;

            const addQtyStr = prompt(`تعديل/تزويد مخزون دواء (${med.name}):\nالكمية المتبقية حالياً: [${med.qty} عبوة].\n\nأدخل الكمية الجديدة الإضافية للتزويد (أو الكمية الإجمالية الجديدة):`, "50");
            if (addQtyStr === null) return;
            const addQty = parseInt(addQtyStr);

            const newPriceStr = prompt(`أدخل السعر الجديد للدواء (شيكل ₪):`, med.price);
            if (newPriceStr === null) return;
            const newPrice = parseFloat(newPriceStr);

            if (!isNaN(addQty) && addQty >= 0) {
                med.qty = addQty;
            }
            if (!isNaN(newPrice) && newPrice > 0) {
                med.price = newPrice;
            }

            saveInventory(inventory);
            alert(`تم التحديث بنجاح! الكمية المتاحة لـ (${med.name}) أصبحت: ${med.qty} عبوة، والسعر: ${med.price} ₪.`);
            renderInventoryTable();
            renderDoctorMedList();
        }

        const defaultUsers = [
            { username: 'admin', password: '123', role: 'admin', roleName: 'المدير العام', dept: 'الكل' }
        ];

        function getStoredUsers() {
            const stored = localStorage.getItem('clinic_users');
            if (!stored) {
                localStorage.setItem('clinic_users', JSON.stringify(defaultUsers));
                return defaultUsers;
            }
            return JSON.parse(stored);
        }

        function deleteUser(username) {
            if (username === 'admin') return alert('لا يمكن حذف حساب المدير الرئيسي!');
            if (confirm(`هل أنت تأكد من حذف حساب (${username})؟`)) {
                let users = getStoredUsers();
                users = users.filter(u => u.username !== username);
                localStorage.setItem('clinic_users', JSON.stringify(users));
                renderUsersTable();
            }
        }

        function getStoredPatients() {
            const stored = localStorage.getItem('clinic_patients');
            return stored ? JSON.parse(stored) : [];
        }

        function savePatients(patients) {
            localStorage.setItem('clinic_patients', JSON.stringify(patients));
            refreshActiveScreenData();
        }

        let currentUser = null;
        let activeTabName = 'login';
        let previousDoctorCount = 0;
        let previousAccountantCount = 0;
        let previousPharmacyCount = 0;

        function handleLogin(e) {
            e.preventDefault();
            const emailInput = document.getElementById('loginEmail').value.trim();
            const passwordInput = document.getElementById('loginPassword').value.trim();
            const errorBox = document.getElementById('loginError');

            const systemUsers = getStoredUsers();
            const foundUser = systemUsers.find(u => u.username === emailInput && u.password === passwordInput);

            if (foundUser) {
                errorBox.style.display = 'none';
                currentUser = foundUser;

                document.getElementById('screen-login').classList.add('hidden');
                document.getElementById('appNav').classList.remove('hidden');
                document.getElementById('userInfo').classList.remove('hidden');

                document.getElementById('userName').innerText = foundUser.username;
                document.getElementById('userBadge').innerText = foundUser.roleName || foundUser.role;

                const baseRole = foundUser.role.startsWith('doctor') ? 'doctor' : foundUser.role;

                applyPermissions(baseRole);
                switchTab(baseRole);
            } else {
                errorBox.style.display = 'block';
            }
        }

        function updateNotificationBadges() {
            const patients = getStoredPatients();

            let doctorDept = 'الكل';
            if (currentUser && currentUser.dept) {
                doctorDept = normalizeDept(currentUser.dept);
            }
            const waitingDoctorCount = patients.filter(p => {
                if (p.status !== 'waiting_doctor') return false;
                if (doctorDept === 'الكل') return true;
                return normalizeDept(p.dept) === doctorDept;
            }).length;

            const waitingPaymentCount = patients.filter(p => p.status === 'waiting_payment').length;
            const waitingPharmacyCount = patients.filter(p => p.status === 'waiting_pharmacy').length;

            if (waitingDoctorCount > previousDoctorCount || 
                waitingPaymentCount > previousAccountantCount || 
                waitingPharmacyCount > previousPharmacyCount) {
                playNotificationSound();
            }

            previousDoctorCount = waitingDoctorCount;
            previousAccountantCount = waitingPaymentCount;
            previousPharmacyCount = waitingPharmacyCount;

            setBadge('badge-doctor', waitingDoctorCount);
            setBadge('badge-accountant', waitingPaymentCount);
            setBadge('badge-pharmacy', waitingPharmacyCount);
            setBadge('badge-reception', patients.length);
        }

        function setBadge(id, count) {
            const badgeEl = document.getElementById(id);
            if (!badgeEl) return;
            if (count > 0) {
                badgeEl.innerText = count;
                badgeEl.classList.remove('hidden');
            } else {
                badgeEl.classList.add('hidden');
            }
        }

        function applyPermissions(role) {
            const navButtons = {
                reception: document.getElementById('nav-reception'),
                doctor: document.getElementById('nav-doctor'),
                accountant: document.getElementById('nav-accountant'),
                pharmacy: document.getElementById('nav-pharmacy'),
                admin: document.getElementById('nav-admin')
            };

            if (role === 'admin') {
                Object.values(navButtons).forEach(btn => btn && btn.classList.remove('hidden'));
            } else {
                Object.keys(navButtons).forEach(key => {
                    if (navButtons[key]) {
                        if (key === role) navButtons[key].classList.remove('hidden');
                        else navButtons[key].classList.add('hidden');
                    }
                });
            }
        }

        function logout() {
            currentUser = null;
            activeTabName = 'login';
            document.getElementById('screen-login').classList.remove('hidden');
            document.getElementById('appNav').classList.add('hidden');
            document.getElementById('userInfo').classList.add('hidden');
            hideAllScreens();
        }

        function hideAllScreens() {
            ['login', 'reception', 'doctor', 'accountant', 'pharmacy', 'admin'].forEach(s => {
                const el = document.getElementById(`screen-${s}`);
                if (el) el.classList.add('hidden');
            });
        }

        function switchTab(tab) {
            hideAllScreens();
            activeTabName = tab;
            document.getElementById(`screen-${tab}`).classList.remove('hidden');
            
            const buttons = document.querySelectorAll('.nav-btn');
            buttons.forEach(btn => btn.classList.remove('active'));
            const activeNav = document.getElementById(`nav-${tab}`);
            if(activeNav) activeNav.classList.add('active');
            
            refreshActiveScreenData();
        }

        function refreshActiveScreenData() {
            setHospitalNameDisplay();

            if(activeTabName === 'doctor') {
                updateDoctorDropdown();
                renderDoctorMedList();
                renderDentalServices();
                handlePatientSelectionChange();
            }
            if(activeTabName === 'accountant') {
                updateAccountantDropdown();
                calculatePaymentStats();
            }
            if(activeTabName === 'pharmacy') {
                renderPharmacy();
                renderInventoryTable();
            }
            if(activeTabName === 'admin') {
                renderAdmin();
                renderUsersTable();
            }
            updateNotificationBadges();
        }

        function resetSelectionState() {
            selectedMedsState = {};
            selectedMedsQtyState = {};
            selectedDentalState = {};
            renderDoctorMedList();
            renderDentalServices();
            calculateLiveDoctorTotal();
        }

        function handlePatientSelectionChange() {
            resetSelectionState();
            
            const selectedPatientId = document.getElementById('docPatientSelect').value;
            const dentalBox = document.getElementById('dentalServicesBox');
            
            if (!selectedPatientId) {
                dentalBox.classList.add('hidden');
                return;
            }

            const patients = getStoredPatients();
            const patient = patients.find(p => p.id == selectedPatientId);

            if (patient && normalizeDept(patient.dept) === 'أسنان') {
                dentalBox.classList.remove('hidden');
            } else {
                dentalBox.classList.add('hidden');
            }
        }

        function addPatientTicket(e) {
            e.preventDefault();
            const patients = getStoredPatients();
            const deptSelect = document.getElementById('patientDept');
            const selectedDeptValue = deptSelect ? deptSelect.value : '';
            const deptName = normalizeDept(selectedDeptValue);
            
            const todayStr = new Date().toISOString().slice(0, 10);
            const sameDeptTodayCount = patients.filter(p => normalizeDept(p.dept) === deptName && (p.date === todayStr || !p.date)).length;
            const queueNumber = sameDeptTodayCount + 1;

            const patient = {
                id: Date.now(),
                date: todayStr,
                queueNum: queueNumber,
                name: document.getElementById('patientName').value,
                nationalId: document.getElementById('patientID').value,
                phone: document.getElementById('patientPhone').value,
                dept: deptName,
                doctorName: '-',
                notes: '',
                status: 'waiting_doctor',
                meds: [],
                total: 0
            };
            patients.push(patient);
            savePatients(patients);

            alert(`تم تسجيل المريض (${patient.name}) بنجاح.\nالتاريخ: ${patient.date}\nالقسم: ${patient.dept}\nرقم الدور: [${patient.queueNum}]`);
            e.target.reset();
            renderDepartmentsUI();
        }

        function updateDoctorDropdown() {
            const select = document.getElementById('docPatientSelect');
            const titleEl = document.getElementById('doctorDeptTitle');
            const patients = getStoredPatients();
            
            let doctorDept = 'الكل';
            if (currentUser && currentUser.dept) {
                doctorDept = normalizeDept(currentUser.dept);
            }

            titleEl.innerText = doctorDept === 'الكل' ? 'جميع الأقسام' : `قسم ${doctorDept}`;

            const currentSelectedValue = select.value;

            const waiting = patients
                .filter(p => p.status === 'waiting_doctor' && (doctorDept === 'الكل' || normalizeDept(p.dept) === doctorDept))
                .sort((a, b) => a.id - b.id);

            if (waiting.length === 0) {
                select.innerHTML = `<option value="">-- لا يوجد مرضى بانتظار قسم (${doctorDept}) --</option>`;
            } else {
                select.innerHTML = '<option value="">-- اختر مريض --</option>' + 
                    waiting.map((p, index) => {
                        const queueDisplay = p.queueNum || (index + 1);
                        const rankTitle = index === 0 ? ' (🥇 الأول بالدور)' : index === 1 ? ' (🥈 الثاني بالدور)' : ` (رقم ${index + 1})`;
                        return `<option value="${p.id}">دور [${queueDisplay}] - ${p.name} - قسم ${p.dept} ${rankTitle}</option>`;
                    }).join('');
                select.value = currentSelectedValue;
            }
        }

        function handleDoctorMedCheck(medName, isChecked, availableQty) {
            if (isChecked && availableQty <= 0) {
                alert(`⚠️ تنبيه: دواء (${medName}) نفد من المخزون تماماً (الكمية المتبقية: 0 عبوة).\nيرجى إبلاغ الصيدلي لتزويد المخزون أولاً.`);
                selectedMedsState[medName] = false;
                renderDoctorMedList(document.getElementById('medSearchInput').value.trim());
                return;
            }
            selectedMedsState[medName] = isChecked;
            if (isChecked && !selectedMedsQtyState[medName]) {
                selectedMedsQtyState[medName] = 1;
            }
            calculateLiveDoctorTotal();
        }

        function updateMedQty(medName, qtyValue) {
            const qty = parseInt(qtyValue) || 1;
            selectedMedsQtyState[medName] = qty;
            
            if (!selectedMedsState[medName]) {
                selectedMedsState[medName] = true;
                const checkEl = document.querySelector(`.med-check[value="${medName}"]`);
                if (checkEl) checkEl.checked = true;
            }
            calculateLiveDoctorTotal();
        }

        function renderDoctorMedList(filterText = '') {
            const container = document.getElementById('doctorMedList');
            const inventory = getStoredInventory();
            const filtered = inventory.filter(m => m.name.toLowerCase().includes(filterText.toLowerCase()));

            if (filtered.length === 0) {
                container.innerHTML = '<p style="color:#94a3b8; text-align:center; grid-column:span 3;">لا توجد أدوية تطابق البحث</p>';
                return;
            }

            container.innerHTML = filtered.map(m => {
                const isChecked = selectedMedsState[m.name] ? 'checked' : '';
                const currentQty = selectedMedsQtyState[m.name] || 1;
                const isOutOfStock = m.qty <= 0;

                return `
                <div class="med-item ${isOutOfStock ? 'out-of-stock' : ''}">
                    <label style="display:flex; align-items:center; gap:8px; flex:1; cursor:pointer;">
                        <input type="checkbox" value="${m.name}" data-price="${m.price}" class="med-check" ${isChecked} onchange="handleDoctorMedCheck('${m.name}', this.checked, ${m.qty})">
                        <span>${m.name} (${m.price} ₪) ${isOutOfStock ? '<span style="color:#ef4444; font-size:12px;">(نفد من المخزون ❌)</span>' : ''}</span>
                    </label>
                    <div style="display:flex; align-items:center; gap:4px;">
                        <span style="font-size:11px; color:#64748b;">العدد:</span>
                        <select class="med-qty-select" data-medname="${m.name}" onchange="updateMedQty('${m.name}', this.value)">
                            ${[1,2,3,4,5,6,7,8,9,10].map(n => `<option value="${n}" ${n === currentQty ? 'selected' : ''}>${n}</option>`).join('')}
                        </select>
                    </div>
                </div>`;
            }).join('');
        }

        function filterDoctorMeds() {
            renderDoctorMedList(document.getElementById('medSearchInput').value.trim());
        }

        function selectAllMeds() {
            const inventory = getStoredInventory();
            let hasOutOfStock = false;
            inventory.forEach(m => {
                if(m.qty > 0) {
                    selectedMedsState[m.name] = true;
                    if(!selectedMedsQtyState[m.name]) selectedMedsQtyState[m.name] = 1;
                } else {
                    hasOutOfStock = true;
                }
            });
            if(hasOutOfStock) {
                alert('تم تحديد الأدوية المتاحة فقط، وتم تجاوز الأدوية النافدة من المخزون ⚠️');
            }
            renderDoctorMedList(document.getElementById('medSearchInput').value.trim());
            calculateLiveDoctorTotal();
        }

        function calculateLiveDoctorTotal() {
            let total = 0;
            document.querySelectorAll('.dental-check:checked').forEach(c => {
                total += parseFloat(c.getAttribute('data-price') || 0);
            });

            const customPrice = parseFloat(document.getElementById('customDentalServicePrice').value) || 0;
            total += customPrice;

            document.querySelectorAll('.med-check:checked').forEach(c => {
                const medName = c.value;
                const unitPrice = parseFloat(c.getAttribute('data-price') || 0);
                const qty = selectedMedsQtyState[medName] || 1;
                total += (unitPrice * qty);
            });

            const displayEl = document.getElementById('calculatedDoctorTotalDisplay');
            if (displayEl) displayEl.innerText = `${total} ₪`;
            return total;
        }

        function handleEnterCalculate(e) {
            if (e.key === 'Enter') {
                e.preventDefault();
                calculateLiveDoctorTotal();
            }
        }

        function sendToAccountant() {
            const id = document.getElementById('docPatientSelect').value;
            if(!id) return alert('اختر مريضاً أولاً');
            
            const patients = getStoredPatients();
            const patient = patients.find(p => p.id == id);
            
            const selectedItems = [];
            let totalPriceSum = 0;
            const inventory = getStoredInventory();
            let stockError = false;

            if (normalizeDept(patient.dept) === 'أسنان') {
                document.querySelectorAll('.dental-check:checked').forEach(c => {
                    selectedItems.push("إجراء: " + c.value);
                    totalPriceSum += parseFloat(c.getAttribute('data-price') || 0);
                });

                const customDentalName = document.getElementById('customDentalServiceName').value.trim();
                const customDentalPrice = parseFloat(document.getElementById('customDentalServicePrice').value) || 0;
                if (customDentalName) {
                    selectedItems.push("إجراء خاص: " + customDentalName);
                    totalPriceSum += customDentalPrice;
                }
            }

            document.querySelectorAll('.med-check:checked').forEach(c => {
                const medName = c.value;
                const unitPrice = parseFloat(c.getAttribute('data-price') || 0);
                const requestedQty = selectedMedsQtyState[medName] || 1;

                const invItem = inventory.find(i => i.name === medName);
                if (invItem && invItem.qty < requestedQty) {
                    alert(`❌ لا يمكن الإرسال: الدواء (${medName}) الكمية المتاحة منه بالمخزون هي (${invItem.qty}) فقط، ولا تكفي للعدد المطلوبة (${requestedQty}).`);
                    stockError = true;
                    return;
                }

                selectedItems.push(`دواء: ${medName} (عدد ${requestedQty})`);
                totalPriceSum += (unitPrice * requestedQty);
            });

            if (stockError) return;

            patient.meds = selectedItems;
            patient.total = totalPriceSum;
            patient.notes = document.getElementById('docNotes').value.trim();
            patient.doctorName = currentUser ? currentUser.username : 'دكتور العامة';
            patient.status = 'waiting_payment';

            savePatients(patients);
            alert(`تم تحويل المريض (${patient.name}) بواسطة الطبيب (${patient.doctorName}) بنجاح. المبلغ المطلوب: ${patient.total} ₪`);
            
            resetSelectionState();
            document.getElementById('docNotes').value = '';
            document.getElementById('customDentalServiceName').value = '';
            document.getElementById('customDentalServicePrice').value = '';
            document.getElementById('medSearchInput').value = '';
        }

        function updateAccountantDropdown() {
            const select = document.getElementById('accSelect');
            const patients = getStoredPatients();
            const currentSelectedValue = select.value;
            
            const waiting = patients
                .filter(p => p.status === 'waiting_payment')
                .sort((a, b) => a.id - b.id);

            if (waiting.length === 0) {
                select.innerHTML = '<option value="">-- لا يوجد مرضى بانتظار المحاسبة --</option>';
            } else {
                select.innerHTML = '<option value="">-- اختر مريض للدفع --</option>' + 
                    waiting.map((p, index) => {
                        const queueDisplay = p.queueNum || (index + 1);
                        const rankTitle = index === 0 ? ' (الأول بالدور)' : ` (الترتيب ${index + 1})`;
                        return `<option value="${p.id}">دور [${queueDisplay}] - ${p.name} - قسم ${p.dept} (${p.total} ₪) ${rankTitle}</option>`;
                    }).join('');
                select.value = currentSelectedValue;
            }
        }

        function calculateBill() {
            const id = document.getElementById('accSelect').value;
            const patients = getStoredPatients();
            const patient = patients.find(p => p.id == id);
            document.getElementById('totalBillAmountInput').value = patient ? patient.total : 0;
        }

        function calculatePaymentStats() {
            const patients = getStoredPatients();
            const paidPatients = patients.filter(p => p.status === 'waiting_pharmacy' || p.status === 'completed');

            let jawwalPay = 0, bank = 0, wallet = 0, cash = 0;

            paidPatients.forEach(p => {
                const method = p.payMethod || '';
                if (method.includes('جوال بي')) jawwalPay += (p.total || 0);
                else if (method.includes('بنك فلسطين')) bank += (p.total || 0);
                else if (method.includes('محفظة')) wallet += (p.total || 0);
                else if (method.includes('نقداً')) cash += (p.total || 0);
            });

            const elJawwal = document.getElementById('accStatJawwalPay');
            const elBank = document.getElementById('accStatBank');
            const elWallet = document.getElementById('accStatWallet');
            const elCash = document.getElementById('accStatCash');

            if(elJawwal) elJawwal.innerText = `${jawwalPay} ₪`;
            if(elBank) elBank.innerText = `${bank} ₪`;
            if(elWallet) elWallet.innerText = `${wallet} ₪`;
            if(elCash) elCash.innerText = `${cash} ₪`;

            const adminJawwal = document.getElementById('adminStatJawwalPay');
            const adminBank = document.getElementById('adminStatBank');
            const adminWallet = document.getElementById('adminStatWallet');
            const adminCash = document.getElementById('adminStatCash');

            if(adminJawwal) adminJawwal.innerText = `${jawwalPay} ₪`;
            if(adminBank) adminBank.innerText = `${bank} ₪`;
            if(adminWallet) adminWallet.innerText = `${wallet} ₪`;
            if(adminCash) adminCash.innerText = `${cash} ₪`;

            return { jawwalPay, bank, wallet, cash };
        }

        function exportAllOperationsToExcel() {
            const patients = getStoredPatients();
            if (patients.length === 0) return alert('لا توجد حالات مسجلة بالنظام حتى الآن!');

            const currentHospName = getStoredHospitalName();
            const statusMap = {
                waiting_doctor: 'عند الطبيب',
                waiting_payment: 'عند المحاسب',
                waiting_pharmacy: 'بالصيدلية',
                completed: 'مكتمل ومصروف'
            };

            let tableHTML = `<table border="1" style="direction:rtl; text-align:right;">
                <tr style="background-color:#047857; color:white; font-weight:bold; font-size:16px;">
                    <th colspan="9" style="text-align:center;">كشف السجل المالي والعمليات التفصيلي - ${currentHospName}</th>
                </tr>
                <tr style="background-color:#047857; color:white; font-weight:bold;">
                    <th>التاريخ الفعلي</th>
                    <th>رقم الدور</th>
                    <th>اسم المريض</th>
                    <th>القسم</th>
                    <th>الطبيب المعالج</th>
                    <th>وسيلة الدفع</th>
                    <th>رقم الوصل / الحوالة</th>
                    <th>المبلغ (₪)</th>
                    <th>حالة الطلب</th>
                </tr>`;

            patients.forEach((p, idx) => {
                tableHTML += `<tr>
                    <td>${p.date || '-'}</td>
                    <td style="text-align:center;">دور [${p.queueNum || (idx + 1)}]</td>
                    <td style="font-weight:bold;">${p.name}</td>
                    <td>${p.dept}</td>
                    <td>${p.doctorName || '-'}</td>
                    <td>${p.payMethod || '-'}</td>
                    <td>${p.payRef || '-'}</td>
                    <td style="font-weight:bold; color:#059669;">${p.total || 0} ₪</td>
                    <td>${statusMap[p.status] || p.status}</td>
                </tr>`;
            });

            tableHTML += `</table>`;

            const blob = new Blob(['\ufeff' + tableHTML], {
                type: 'application/vnd.ms-excel;charset=utf-8;'
            });
            const link = document.createElement("a");
            link.href = URL.createObjectURL(blob);
            link.download = `كشف_العمليات_والسجل_المالي_${currentHospName}_${new Date().toISOString().slice(0,10)}.xls`;
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        }

        function exportDoctorsToExcel() {
            const patients = getStoredPatients();
            const doctorMap = {};

            patients.forEach(p => {
                if (p.doctorName && p.doctorName !== '-') {
                    if (!doctorMap[p.doctorName]) {
                        doctorMap[p.doctorName] = { count: 0, total: 0 };
                    }
                    doctorMap[p.doctorName].count++;
                    doctorMap[p.doctorName].total += (p.total || 0);
                }
            });

            const docKeys = Object.keys(doctorMap);
            if (docKeys.length === 0) return alert('لا توجد إحصائيات أطباء مسجلة حتى الآن!');

            const currentHospName = getStoredHospitalName();
            let tableHTML = `<table border="1" style="direction:rtl; text-align:right;">
                <tr style="background-color:#047857; color:white; font-weight:bold; font-size:16px;">
                    <th colspan="3" style="text-align:center;">إحصائيات وعمل الأطباء - ${currentHospName}</th>
                </tr>
                <tr style="background-color:#047857; color:white; font-weight:bold;">
                    <th>اسم الطبيب</th>
                    <th>عدد الحالات التي عولجت</th>
                    <th>إجمالي المبالغ والمبيعات (₪)</th>
                </tr>`;

            docKeys.forEach(doc => {
                tableHTML += `<tr>
                    <td style="font-weight:bold;">👨‍⚕️ ${doc}</td>
                    <td>${doctorMap[doc].count} حالة</td>
                    <td style="font-weight:bold; color:#059669;">${doctorMap[doc].total} ₪</td>
                </tr>`;
            });

            tableHTML += `</table>`;

            const blob = new Blob(['\ufeff' + tableHTML], {
                type: 'application/vnd.ms-excel;charset=utf-8;'
            });
            const link = document.createElement("a");
            link.href = URL.createObjectURL(blob);
            link.download = `إحصائيات_الأطباء_${currentHospName}_${new Date().toISOString().slice(0,10)}.xls`;
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        }

        function exportMonthlyPaymentsToExcel() {
            const patients = getStoredPatients();
            if (patients.length === 0) return alert('لا توجد بيانات أو مبيعات مسجلة حتى الآن!');

            const dailyMap = {};

            patients.forEach(p => {
                if (p.status === 'completed' || p.status === 'waiting_pharmacy') {
                    const dateKey = p.date || new Date().toISOString().slice(0, 10);
                    
                    if (!dailyMap[dateKey]) {
                        dailyMap[dateKey] = { jawwalPay: 0, bank: 0, wallet: 0, cash: 0, total: 0, patientsCount: 0 };
                    }

                    const method = p.payMethod || '';
                    const amount = parseFloat(p.total) || 0;

                    if (method.includes('جوال بي')) dailyMap[dateKey].jawwalPay += amount;
                    else if (method.includes('بنك فلسطين')) dailyMap[dateKey].bank += amount;
                    else if (method.includes('محفظة')) dailyMap[dateKey].wallet += amount;
                    else if (method.includes('نقداً')) dailyMap[dateKey].cash += amount;

                    dailyMap[dateKey].total += amount;
                    dailyMap[dateKey].patientsCount++;
                }
            });

            const activeDaysCount = Object.keys(dailyMap).length;
            const currentHospName = getStoredHospitalName();

            let tableHTML = `<table border="1" style="direction:rtl; text-align:right;">
                <tr style="background-color:#047857; color:white; font-weight:bold; font-size:16px;">
                    <th colspan="7" style="text-align:center;">ملخص حسابات الأيام - ${currentHospName}</th>
                </tr>
                <tr style="background-color:#047857; color:white; font-weight:bold;">
                    <th>التاريخ (اليوم الفعلي)</th>
                    <th>عدد الحالات اليومية</th>
                    <th>جوال بي (₪)</th>
                    <th>بنك فلسطين (₪)</th>
                    <th>محفظة إلكترونية (₪)</th>
                    <th>دفع نقدي - كاش (₪)</th>
                    <th>المجموع اليومي الشامل (₪)</th>
                </tr>`;

            let grandJawwal = 0, grandBank = 0, grandWallet = 0, grandCash = 0, grandTotal = 0;

            Object.keys(dailyMap).sort().forEach(date => {
                const d = dailyMap[date];
                grandJawwal += d.jawwalPay;
                grandBank += d.bank;
                grandWallet += d.wallet;
                grandCash += d.cash;
                grandTotal += d.total;

                tableHTML += `<tr>
                    <td style="font-weight:bold;">${date}</td>
                    <td>${d.patientsCount} حالة</td>
                    <td>${d.jawwalPay} ₪</td>
                    <td>${d.bank} ₪</td>
                    <td>${d.wallet} ₪</td>
                    <td>${d.cash} ₪</td>
                    <td style="font-weight:bold; color:#059669;">${d.total} ₪</td>
                </tr>`;
            });

            tableHTML += `<tr style="font-weight:bold; background-color:#e2e8f0; font-size:15px;">
                <td>الإجمالي الكلي (لعدد ${activeDaysCount} أصل أسبوع/شهر)</td>
                <td>-</td>
                <td>${grandJawwal} ₪</td>
                <td>${grandBank} ₪</td>
                <td>${grandWallet} ₪</td>
                <td>${grandCash} ₪</td>
                <td style="color:#2563eb;">${grandTotal} ₪</td>
            </tr></table>`;

            const blob = new Blob(['\ufeff' + tableHTML], {
                type: 'application/vnd.ms-excel;charset=utf-8;'
            });
            const link = document.createElement("a");
            link.href = URL.createObjectURL(blob);
            link.download = `تقرير_ملخص_حسابات_${currentHospName}_أيام_العمل_${activeDaysCount}_يوم.xls`;
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        }

        function processPayment() {
            const id = document.getElementById('accSelect').value;
            if(!id) return alert('اختر مريضاً أولاً');
            
            const patients = getStoredPatients();
            const patient = patients.find(p => p.id == id);
            
            const finalAmount = parseFloat(document.getElementById('totalBillAmountInput').value);
            patient.total = finalAmount;
            patient.payMethod = document.getElementById('payMethod').value;
            patient.payPhone = document.getElementById('payPhone').value || '-';
            patient.payRef = document.getElementById('payRef').value || ('REF-' + Math.floor(Math.random()*100000));
            patient.status = 'waiting_pharmacy';

            savePatients(patients);
            alert(`تم تأكيد استلام مبلغ (${patient.total} ₪) عبر (${patient.payMethod}) وتحويل المريض [دور رقم ${patient.queueNum || 1}] للصيدلية.`);
            
            document.getElementById('totalBillAmountInput').value = 0;
            document.getElementById('payPhone').value = '';
            document.getElementById('payRef').value = '';
            
            calculatePaymentStats();
        }

        function renderPharmacy() {
            const container = document.getElementById('pharmacyList');
            const patients = getStoredPatients();
            
            const ready = patients
                .filter(p => p.status === 'waiting_pharmacy')
                .sort((a, b) => a.id - b.id);

            if(ready.length === 0) {
                container.innerHTML = '<p style="text-align:center; color:#94a3b8; padding:20px;">لا توجد وصفات بانتظار الصرف</p>';
            } else {
                container.innerHTML = ready.map((p, index) => `
                    <div class="pharmacy-card">
                        <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:10px;">
                            <div>
                                <h3 style="font-weight:bold; font-size:18px;">
                                    <span class="queue-badge">دور [${p.queueNum || (index + 1)}]</span>
                                    ${p.name} - <span style="color:#059669;">قسم ${p.dept}</span> 
                                    <span style="font-size:13px; color:#2563eb; margin-right:10px;">(👨‍⚕️ الطبيب المعالج: ${p.doctorName || '-'})</span>
                                </h3>
                            </div>
                            <button onclick="dispenseMed(${p.id})" class="btn" style="width:auto; padding:8px 18px; font-size:14px;">تأكيد التسليم وتفريغ الدور واستخصام المخزون</button>
                        </div>
                        
                        <div style="font-size:15px; margin-top:8px;">
                            <strong>💊 الأدوية والإجراءات المحددة:</strong> 
                            <span style="color:#059669; font-weight:bold;">${p.meds.join(' | ') || 'لا يوجد أدوية محددة'}</span>
                        </div>

                        ${p.notes ? `
                            <div class="notes-text">
                                📝 ملاحظات وتوصيات الطبيب: ${p.notes}
                            </div>
                        ` : ''}
                    </div>
                `).join('');
            }
        }

        function dispenseMed(id) {
            const patients = getStoredPatients();
            const patient = patients.find(p => p.id == id);
            const inventory = getStoredInventory();
            let outOfStockAlert = false;

            if (patient.meds && patient.meds.length > 0) {
                patient.meds.forEach(item => {
                    if (item.startsWith("دواء: ")) {
                        let medName = item.replace("دواء: ", "").trim();
                        let qtyToDeduct = 1;

                        const qtyMatch = medName.match(/\(عدد (\d+)\)/);
                        if (qtyMatch) {
                            qtyToDeduct = parseInt(qtyMatch[1]);
                            medName = medName.replace(/\(عدد \d+\)/, "").trim();
                        }

                        const invItem = inventory.find(i => i.name === medName);
                        if (!invItem || invItem.qty < qtyToDeduct) {
                            alert(`❌ خطأ في الصرف: دواء (${medName}) المطلوب منه (${qtyToDeduct}) عبوة غير متوفر حالياً بالرصيد الكافي بالمخزون! (المتبقي: ${invItem ? invItem.qty : 0}).\nيرجى إعادة تزويد المخزون أولاً لتأكيد تسليم الوصفة.`);
                            outOfStockAlert = true;
                        }
                    }
                });

                if (outOfStockAlert) return;

                patient.meds.forEach(item => {
                    if (item.startsWith("دواء: ")) {
                        let medName = item.replace("دواء: ", "").trim();
                        let qtyToDeduct = 1;

                        const qtyMatch = medName.match(/\(عدد \d+\)/);
                        if (qtyMatch) {
                            qtyToDeduct = parseInt(qtyMatch[1]);
                            medName = medName.replace(/\(عدد \d+\)/, "").trim();
                        }

                        const invItem = inventory.find(i => i.name === medName);
                        if (!invItem) {
                            invItem.qty = Math.max(0, invItem.qty - qtyToDeduct);
                            invItem.usedToday = (invItem.usedToday || 0) + qtyToDeduct;
                            invItem.totalUsed = (invItem.totalUsed || 0) + qtyToDeduct;
                        }
                    }
                });
                saveInventory(inventory);
            }

            patient.status = 'completed';
            savePatients(patients);

            alert(`تم إكمال وإغلاق حالة المريض (${patient.name}) وتحديث مخزون الأدوية بنجاح.`);
        }

        function addNewInventoryMed(e) {
            e.preventDefault();
            const name = document.getElementById('newInventoryMedName').value.trim();
            const price = parseFloat(document.getElementById('newInventoryMedPrice').value);
            const qty = parseInt(document.getElementById('newInventoryMedQty').value);

            const inventory = getStoredInventory();
            inventory.push({ id: Date.now(), name, price, qty, usedToday: 0, totalUsed: 0 });
            saveInventory(inventory);

            alert(`تم إضافة الدواء (${name}) بسعر ${price} ₪ للمخزن.`);
            e.target.reset();
            renderInventoryTable();
            renderDoctorMedList();
            renderPharmacy();
        }

        function renderInventoryTable() {
            const tbody = document.getElementById('inventoryTable');
            const inventory = getStoredInventory();
            tbody.innerHTML = inventory.map(i => `
                <tr>
                    <td style="font-weight:bold; font-size:15px;">${i.name}</td>
                    <td style="color:#059669; font-weight:bold;">${i.price} ₪</td>
                    <td style="font-weight:bold; color:${i.qty < 5 ? '#ef4444' : '#059669'};">${i.qty} عبوة متبقية</td>
                    <td style="font-weight:bold; color:#2563eb;">${i.usedToday || 0} عبوة مصروفة اليوم</td>
                    <td style="font-weight:bold; color:#d97706;">${i.totalUsed || 0} عبوة إجمالي</td>
                    <td class="no-print">
                        <button onclick="editInventoryMed(${i.id})" class="btn-orange" style="margin-left:4px;">✏️ تعديل / تزويد</button>
                        <button onclick="deleteInventoryMed(${i.id})" class="btn-red">🗑️ حذف</button>
                    </td>
                </tr>
            `).join('');
        }

        function exportInventoryToExcel() {
            const inventory = getStoredInventory();
            if(inventory.length === 0) return alert('لا توجد أدوية بالتصدير!');

            const currentHospName = getStoredHospitalName();
            let tableHTML = `<table border="1" style="direction:rtl; text-align:right;">
                <tr style="background-color:#047857; color:white; font-weight:bold; font-size:16px;">
                    <th colspan="5" style="text-align:center;">تقرير مخزن الأدوية - ${currentHospName}</th>
                </tr>
                <tr style="background-color:#047857; color:white; font-weight:bold;">
                    <th>اسم الدواء</th>
                    <th>السعر (₪)</th>
                    <th>الكمية المتبقية</th>
                    <th>الكمية المصروفة اليوم</th>
                    <th>إجمالي الاستهلاك</th>
                </tr>`;

            inventory.forEach(i => {
                tableHTML += `<tr>
                    <td>${i.name}</td>
                    <td>${i.price}</td>
                    <td>${i.qty}</td>
                    <td>${i.usedToday || 0}</td>
                    <td>${i.totalUsed || 0}</td>
                </tr>`;
            });

            tableHTML += `</table>`;

            const blob = new Blob(['\ufeff' + tableHTML], {
                type: 'application/vnd.ms-excel;charset=utf-8;'
            });
            const link = document.createElement("a");
            link.href = URL.createObjectURL(blob);
            link.download = `تقرير_مخزن_${currentHospName}_${new Date().toISOString().slice(0,10)}.xls`;
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        }

        function renderAdmin() {
            const patients = getStoredPatients();
            const completed = patients.filter(p => p.status === 'completed' || p.status === 'waiting_pharmacy');
            const totalIncome = completed.reduce((sum, p) => sum + p.total, 0);

            const expensesInput = document.getElementById('dailyExpensesInput');
            const expenses = expensesInput ? (parseFloat(expensesInput.value) || 0) : 0;
            const netProfit = Math.max(0, totalIncome - expenses);

            document.getElementById('statPatients').innerText = patients.length;
            document.getElementById('statIncome').innerText = `${totalIncome} ₪`;
            document.getElementById('statProfit').innerText = `${netProfit} ₪`;

            calculatePaymentStats();

            const doctorMap = {};
            patients.forEach(p => {
                if (p.doctorName && p.doctorName !== '-') {
                    if (!doctorMap[p.doctorName]) {
                        doctorMap[p.doctorName] = { count: 0, total: 0 };
                    }
                    doctorMap[p.doctorName].count++;
                    doctorMap[p.doctorName].total += (p.total || 0);
                }
            });

            const doctorTbody = document.getElementById('doctorsStatsTable');
            const docKeys = Object.keys(doctorMap);
            if (docKeys.length === 0) {
                doctorTbody.innerHTML = '<tr><td colspan="3" style="text-align:center; color:#94a3b8;">لا توجد معاينات أطباء مسجلة حتى الآن</td></tr>';
            } else {
                doctorTbody.innerHTML = docKeys.map(doc => `
                    <tr>
                        <td style="font-weight:bold; color:#0284c7;">👨‍⚕️ ${doc}</td>
                        <td style="font-weight:bold;">${doctorMap[doc].count} حالة</td>
                        <td style="color:#059669; font-weight:bold;">${doctorMap[doc].total} ₪</td>
                    </tr>
                `).join('');
            }

            const tbody = document.getElementById('adminReportTable');
            if(patients.length === 0) {
                tbody.innerHTML = '<tr><td colspan="9" style="text-align:center; color:#94a3b8;">لا توجد حالات مسجلة حتى الآن</td></tr>';
                return;
            }

            const statusMap = {
                waiting_doctor: 'عند الطبيب',
                waiting_payment: 'عند المحاسب',
                waiting_pharmacy: 'بالصيدلية',
                completed: 'مكتمل ومصروف'
            };

            tbody.innerHTML = patients.map((p, idx) => `
                <tr>
                    <td>${p.date || '-'}</td>
                    <td style="font-weight:bold; color:#2563eb;">[دور ${p.queueNum || (idx + 1)}]</td>
                    <td style="font-weight:bold;">${p.name}</td>
                    <td>${p.dept}</td>
                    <td style="color:#0284c7; font-weight:bold;">${p.doctorName || '-'}</td>
                    <td>${p.payMethod || '-'}</td>
                    <td>${p.payRef || '-'}</td>
                    <td style="color:#059669; font-weight:bold;">${p.total} ₪</td>
                    <td><span class="badge" style="background:#e2e8f0; color:#334155;">${statusMap[p.status] || p.status}</span></td>
                </tr>
            `).join('');
        }

        function clearAllDataPermanently() {
            if(confirm('هل أنت تأكد من تفريغ ومسح السجل التراكمي كاملاً للبدء بفترة عمل جديدة للمستشفى/العيادة؟')) {
                localStorage.removeItem('clinic_patients');
                
                const inventory = getStoredInventory();
                inventory.forEach(i => i.usedToday = 0);
                saveInventory(inventory);

                refreshActiveScreenData();
                alert('تم إعادة الضبط والبدء بسجل جديد بنجاح!');
            }
        }

        function addUserByAdmin(e) {
            e.preventDefault();
            const username = document.getElementById('newUsername').value.trim();
            const password = document.getElementById('newUserPassword').value.trim();
            const selectedRole = document.getElementById('newUserRole').value;

            let role = selectedRole;
            let dept = 'الكل';
            let roleName = 'موظف';

            if (selectedRole.startsWith('doctor_')) {
                role = 'doctor_' + selectedRole.split('_')[1];
                dept = normalizeDept(selectedRole.split('_')[1]);
                roleName = `طبيب (${dept})`;
            } else {
                const rolesMap = { pharmacy: 'صيدلي', reception: 'استقبال', accountant: 'محاسب' };
                roleName = rolesMap[selectedRole] || selectedRole;
            }

            const currentUsers = getStoredUsers();
            currentUsers.push({ username, password, role, roleName, dept });

            localStorage.setItem('clinic_users', JSON.stringify(currentUsers));

            alert(`تم إنشاء الحساب بنجاح!\nاسم المستخدم: ${username}\nالتخصص: ${roleName}`);
            e.target.reset();
            renderUsersTable();
        }

        function renderUsersTable() {
            const tbody = document.getElementById('usersTable');
            const systemUsers = getStoredUsers();
            tbody.innerHTML = systemUsers.map(u => `
                <tr>
                    <td style="font-weight:bold;">${u.username}</td>
                    <td><span class="badge">${u.roleName || u.role}</span></td>
                    <td>•••••• (${u.password})</td>
                    <td>
                        ${u.username !== 'admin' 
                            ? `<button onclick="deleteUser('${u.username}')" class="btn-red">🗑️ حذف الحساب</button>` 
                            : '<span style="color:#94a3b8; font-size:12px;">حساب رئيسي</span>'}
                    </td>
                </tr>
            `).join('');
        }

        setHospitalNameDisplay();
        renderDepartmentsUI();

        setInterval(function() {
            if (currentUser && activeTabName !== 'login') {
                updateNotificationBadges();
            }
        }, 1000);
    </script>
</body>
</html>