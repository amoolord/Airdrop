<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سیستم ارز داخلی - تیتان کوین</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #3498db;
            --secondary: #2c3e50;
            --success: #27ae60;
            --warning: #f39c12;
            --danger: #e74c3c;
            --light: #ecf0f1;
            --dark: #2c3e50;
            --government: #8e44ad;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background: linear-gradient(135deg, #1a2a6c, #2c3e50);
            color: var(--light);
            line-height: 1.6;
            padding: 20px;
            min-height: 100vh;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
        }
        
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 0;
            margin-bottom: 30px;
            border-bottom: 2px solid rgba(255, 255, 255, 0.1);
        }
        
        .logo {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        
        .logo i {
            font-size: 2.5rem;
            color: var(--primary);
        }
        
        .logo h1 {
            font-size: 1.8rem;
            background: linear-gradient(to right, #3498db, #2ecc71);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }
        
        .wallet-info {
            background: rgba(0, 0, 0, 0.3);
            padding: 15px 25px;
            border-radius: 15px;
            display: flex;
            align-items: center;
            gap: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }
        
        .wallet-address {
            font-family: monospace;
            background: rgba(255, 255, 255, 0.1);
            padding: 8px 15px;
            border-radius: 10px;
        }
        
        .balance {
            display: flex;
            align-items: center;
            gap: 5px;
            font-weight: bold;
            color: #f1c40f;
        }
        
        .main-content {
            display: grid;
            grid-template-columns: 1fr 350px;
            gap: 25px;
        }
        
        .card {
            background: rgba(30, 40, 60, 0.7);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 25px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            border: 1px solid rgba(255, 255, 255, 0.1);
            margin-bottom: 25px;
        }
        
        .card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .card-title {
            font-size: 1.4rem;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .card-title i {
            color: var(--primary);
        }
        
        .btn {
            padding: 12px 25px;
            border: none;
            border-radius: 12px;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 1rem;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }
        
        .btn-primary {
            background: var(--primary);
            color: white;
        }
        
        .btn-primary:hover {
            background: #2980b9;
            transform: translateY(-2px);
        }
        
        .btn-success {
            background: var(--success);
            color: white;
        }
        
        .btn-success:hover {
            background: #219653;
            transform: translateY(-2px);
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
        }
        
        .form-control {
            width: 100%;
            padding: 14px;
            border-radius: 12px;
            border: 2px solid rgba(255, 255, 255, 0.1);
            background: rgba(0, 0, 0, 0.2);
            color: white;
            font-size: 1rem;
            transition: border-color 0.3s;
        }
        
        .form-control:focus {
            outline: none;
            border-color: var(--primary);
        }
        
        .form-row {
            display: flex;
            gap: 15px;
            margin-bottom: 15px;
        }
        
        .form-row .form-group {
            flex: 1;
            margin-bottom: 0;
        }
        
        .table-container {
            overflow-x: auto;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            background: rgba(0, 0, 0, 0.2);
            border-radius: 15px;
            overflow: hidden;
        }
        
        th {
            background: rgba(52, 152, 219, 0.2);
            padding: 15px;
            text-align: right;
        }
        
        td {
            padding: 12px 15px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        tr:last-child td {
            border-bottom: none;
        }
        
        tr:hover {
            background: rgba(255, 255, 255, 0.05);
        }
        
        .token-badge {
            display: inline-flex;
            align-items: center;
            gap: 5px;
            background: rgba(52, 152, 219, 0.2);
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.9rem;
        }
        
        .badge {
            padding: 4px 10px;
            border-radius: 10px;
            font-size: 0.85rem;
            font-weight: bold;
        }
        
        .badge-success {
            background: rgba(39, 174, 96, 0.2);
            color: #27ae60;
        }
        
        .badge-warning {
            background: rgba(243, 156, 18, 0.2);
            color: #f39c12;
        }
        
        .badge-danger {
            background: rgba(231, 76, 60, 0.2);
            color: #e74c3c;
        }
        
        .badge-government {
            background: rgba(142, 68, 173, 0.2);
            color: #9b59b6;
        }
        
        .token-list {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            margin-top: 15px;
        }
        
        .token-card {
            background: rgba(0, 0, 0, 0.2);
            border-radius: 15px;
            padding: 20px;
            flex: 1 1 200px;
            min-width: 200px;
            border: 1px solid rgba(255, 255, 255, 0.05);
            transition: transform 0.3s ease;
        }
        
        .token-card:hover {
            transform: translateY(-5px);
            border-color: rgba(52, 152, 219, 0.3);
        }
        
        .token-card-header {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 15px;
        }
        
        .token-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--primary), var(--success));
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
        }
        
        .token-name {
            font-weight: bold;
        }
        
        .token-symbol {
            color: #bbb;
            font-size: 0.9rem;
        }
        
        .token-info {
            font-size: 0.9rem;
            color: #bbb;
        }
        
        .token-info div {
            margin-bottom: 5px;
            display: flex;
            justify-content: space-between;
        }
        
        .highlight {
            color: #f1c40f;
            font-weight: bold;
        }
        
        .json-viewer {
            background: rgba(0, 0, 0, 0.3);
            border-radius: 10px;
            padding: 20px;
            font-family: monospace;
            white-space: pre;
            overflow-x: auto;
            max-height: 300px;
            font-size: 0.9rem;
        }
        
        footer {
            text-align: center;
            margin-top: 40px;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: #bbb;
            font-size: 0.9rem;
        }
        
        @media (max-width: 768px) {
            .main-content {
                grid-template-columns: 1fr;
            }
            
            header {
                flex-direction: column;
                gap: 20px;
            }
            
            .form-row {
                flex-direction: column;
                gap: 15px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <div class="logo">
                <i class="fas fa-coins"></i>
                <h1>سیستم ارز داخلی تیتان کوین</h1>
            </div>
            <div class="wallet-info">
                <div>
                    <div>آدرس کیف پول:</div>
                    <div class="wallet-address">TC-7X3A9B2Y8Z1C5D4E</div>
                </div>
                <div class="balance">
                    <i class="fas fa-wallet"></i>
                    <span>موجودی: 15,430 <span class="highlight">TTC</span></span>
                </div>
            </div>
        </header>
        
        <div class="main-content">
            <div class="left-column">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title"><i class="fas fa-plus-circle"></i> ایجاد ارز جدید</h2>
                    </div>
                    <p>برای ایجاد ارز جدید، 2000 تیتان کوین هزینه دارد. این ارز بلافاصله به کیف پول شما اضافه خواهد شد.</p>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="tokenName">نام ارز</label>
                            <input type="text" id="tokenName" class="form-control" placeholder="مثال: ارز طلایی">
                        </div>
                        <div class="form-group">
                            <label for="tokenSymbol">نماد ارز</label>
                            <input type="text" id="tokenSymbol" class="form-control" placeholder="مثال: GLDS">
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="tokenSupply">تعداد ارز</label>
                            <input type="number" id="tokenSupply" class="form-control" placeholder="مثال: 1000000" value="1000000">
                        </div>
                        <div class="form-group">
                            <label>هزینه ایجاد</label>
                            <div class="form-control" style="display: flex; align-items: center; justify-content: space-between;">
                                <span>2000</span>
                                <span class="token-badge"><i class="fas fa-coins"></i> TTC</span>
                            </div>
                        </div>
                    </div>
                    
                    <button class="btn btn-success" style="width: 100%;">
                        <i class="fas fa-plus"></i> ایجاد ارز جدید
                    </button>
                </div>
                
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title"><i class="fas fa-exchange-alt"></i> انتقال ارز</h2>
                    </div>
                    
                    <div class="form-group">
                        <label for="fromWallet">از کیف پول</label>
                        <select id="fromWallet" class="form-control">
                            <option>TC-7X3A9B2Y8Z1C5D4E (من)</option>
                            <option>TC-GOVERNMENT (دولت)</option>
                            <option>TC-9F3E7A2B5C1D8E4F</option>
                            <option>TC-3B8D5F2A9C1E7D6F</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="toWallet">به کیف پول</label>
                        <select id="toWallet" class="form-control">
                            <option>TC-9F3E7A2B5C1D8E4F</option>
                            <option>TC-3B8D5F2A9C1E7D6F</option>
                            <option>TC-GOVERNMENT (دولت)</option>
                            <option>TC-7X3A9B2Y8Z1C5D4E (من)</option>
                        </select>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="transferCurrency">ارز انتقالی</label>
                            <select id="transferCurrency" class="form-control">
                                <option>TTC (تیتان کوین)</option>
                                <option>GLDS (طلایی)</option>
                                <option>DIGI (دیجیتال)</option>
                                <option>SAFA (سفید)</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="transferAmount">مقدار</label>
                            <input type="number" id="transferAmount" class="form-control" placeholder="مثال: 500">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label>کارمزد انتقال (2%)</label>
                        <div class="form-control">
                            <div style="display: flex; justify-content: space-between;">
                                <span>10 <span class="highlight">TTC</span></span>
                                <span class="badge badge-government">به کیف پول دولت واریز می‌شود</span>
                            </div>
                        </div>
                    </div>
                    
                    <button class="btn btn-primary" style="width: 100%;">
                        <i class="fas fa-paper-plane"></i> انتقال ارز
                    </button>
                </div>
                
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title"><i class="fas fa-wallet"></i> کیف پول‌ها و موجودی‌ها</h2>
                    </div>
                    
                    <div class="table-container">
                        <table>
                            <thead>
                                <tr>
                                    <th>آدرس کیف پول</th>
                                    <th>تیتان کوین (TTC)</th>
                                    <th>ارز طلایی (GLDS)</th>
                                    <th>ارز دیجیتال (DIGI)</th>
                                    <th>ارز سفید (SAFA)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>TC-7X3A9B2Y8Z1C5D4E</td>
                                    <td class="highlight">15,430</td>
                                    <td>25,000</td>
                                    <td>0</td>
                                    <td>18,500</td>
                                </tr>
                                <tr>
                                    <td>TC-GOVERNMENT</td>
                                    <td class="highlight">82,560</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td>TC-9F3E7A2B5C1D8E4F</td>
                                    <td class="highlight">9,870</td>
                                    <td>42,000</td>
                                    <td>75,000</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td>TC-3B8D5F2A9C1E7D6F</td>
                                    <td class="highlight">23,450</td>
                                    <td>12,500</td>
                                    <td>32,000</td>
                                    <td>5,000</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
            <div class="right-column">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title"><i class="fas fa-coins"></i> ارزهای ایجاد شده</h2>
                    </div>
                    
                    <div class="token-list">
                        <div class="token-card">
                            <div class="token-card-header">
                                <div class="token-icon">T</div>
                                <div>
                                    <div class="token-name">تیتان کوین</div>
                                    <div class="token-symbol">TTC</div>
                                </div>
                            </div>
                            <div class="token-info">
                                <div><span>سازنده:</span> <span>سیستم</span></div>
                                <div><span>تعداد کل:</span> <span class="highlight">10,000,000</span></div>
                                <div><span>تاریخ ایجاد:</span> <span>1402/01/15</span></div>
                            </div>
                        </div>
                        
                        <div class="token-card">
                            <div class="token-card-header">
                                <div class="token-icon" style="background:linear-gradient(135deg, #f1c40f, #e67e22)">G</div>
                                <div>
                                    <div class="token-name">ارز طلایی</div>
                                    <div class="token-symbol">GLDS</div>
                                </div>
                            </div>
                            <div class="token-info">
                                <div><span>سازنده:</span> <span>TC-7X3A9B2Y8Z1C5D4E</span></div>
                                <div><span>تعداد کل:</span> <span class="highlight">1,000,000</span></div>
                                <div><span>تاریخ ایجاد:</span> <span>1402/05/20</span></div>
                            </div>
                        </div>
                        
                        <div class="token-card">
                            <div class="token-card-header">
                                <div class="token-icon" style="background:linear-gradient(135deg, #3498db, #9b59b6)">D</div>
                                <div>
                                    <div class="token-name">ارز دیجیتال</div>
                                    <div class="token-symbol">DIGI</div>
                                </div>
                            </div>
                            <div class="token-info">
                                <div><span>سازنده:</span> <span>TC-9F3E7A2B5C1D8E4F</span></div>
                                <div><span>تعداد کل:</span> <span class="highlight">5,000,000</span></div>
                                <div><span>تاریخ ایجاد:</span> <span>1402/07/12</span></div>
                            </div>
                        </div>
                        
                        <div class="token-card">
                            <div class="token-card-header">
                                <div class="token-icon" style="background:linear-gradient(135deg, #ecf0f1, #bdc3c7)">S</div>
                                <div>
                                    <div class="token-name">ارز سفید</div>
                                    <div class="token-symbol">SAFA</div>
                                </div>
                            </div>
                            <div class="token-info">
                                <div><span>سازنده:</span> <span>TC-3B8D5F2A9C1E7D6F</span></div>
                                <div><span>تعداد کل:</span> <span class="highlight">2,500,000</span></div>
                                <div><span>تاریخ ایجاد:</span> <span>1402/08/05</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title"><i class="fas fa-file-code"></i> داده‌های ذخیره شده (JSON)</h2>
                    </div>
                    
                    <div class="json-viewer">
{
  "wallets": [
    {
      "address": "TC-7X3A9B2Y8Z1C5D4E",
      "balances": {
        "TTC": 15430,
        "GLDS": 25000,
        "SAFA": 18500
      }
    },
    {
      "address": "TC-GOVERNMENT",
      "balances": {
        "TTC": 82560
      }
    },
    {
      "address": "TC-9F3E7A2B5C1D8E4F",
      "balances": {
        "TTC": 9870,
        "GLDS": 42000,
        "DIGI": 75000
      }
    },
    {
      "address": "TC-3B8D5F2A9C1E7D6F",
      "balances": {
        "TTC": 23450,
        "GLDS": 12500,
        "DIGI": 32000,
        "SAFA": 5000
      }
    }
  ],
  "tokens": [
    {
      "name": "تیتان کوین",
      "symbol": "TTC",
      "total_supply": 10000000,
      "creator": "سیستم",
      "created_at": "1402/01/15"
    },
    {
      "name": "ارز طلایی",
      "symbol": "GLDS",
      "total_supply": 1000000,
      "creator": "TC-7X3A9B2Y8Z1C5D4E",
      "created_at": "1402/05/20"
    },
    {
      "name": "ارز دیجیتال",
      "symbol": "DIGI",
      "total_supply": 5000000,
      "creator": "TC-9F3E7A2B5C1D8E4F",
      "created_at": "1402/07/12"
    },
    {
      "name": "ارز سفید",
      "symbol": "SAFA",
      "total_supply": 2500000,
      "creator": "TC-3B8D5F2A9C1E7D6F",
      "created_at": "1402/08/05"
    }
  ]
}
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title"><i class="fas fa-plus-circle"></i> ایجاد کیف پول جدید</h2>
                    </div>
                    
                    <p>با ایجاد کیف پول جدید می‌توانید ارزهای خود را ذخیره و مدیریت کنید.</p>
                    
                    <div class="form-group">
                        <label for="newWalletName">نام دارنده</label>
                        <input type="text" id="newWalletName" class="form-control" placeholder="مثال: علی محمدی">
                    </div>
                    
                    <button class="btn btn-primary" style="width: 100%;">
                        <i class="fas fa-wallet"></i> ایجاد کیف پول جدید
                    </button>
                </div>
            </div>
        </div>
        
        <footer>
            <p>سیستم ارز داخلی تیتان کوین - طراحی شده برای شبکه داخلی - نسخه 1.0.0</p>
            <p>© 1402 - تمامی حقوق محفوظ است</p>
        </footer>
    </div>

    <script>
        // شبیه‌سازی تعاملات ساده
        document.querySelectorAll('.btn').forEach(button => {
            button.addEventListener('click', function() {
                const action = this.textContent.trim();
                alert(`عملیات "${action}" در نسخه نمایشی قابل اجرا نیست. در نسخه کامل با بک‌اند پیاده‌سازی می‌شود.`);
            });
        });
        
        // شبیه‌سازی محاسبه کارمزد
        document.getElementById('transferAmount').addEventListener('input', function() {
            const amount = parseFloat(this.value) || 0;
            const fee = amount * 0.02;
            document.querySelector('.form-control div span:first-child').textContent = 
                fee.toFixed(0) + ' TTC';
        });
    </script>
</body>
</html>