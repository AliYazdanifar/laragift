<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فرم پیشنهاد</title>
    <!-- Bootstrap 5 RTL CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css">
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h3 class="mb-0">فرم پیشنهاد</h3>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('suggestion.store') }}">
                        @csrf
                        <!-- سن -->
                        <div class="mb-3">
                            <label for="age" class="form-label">سن</label>
                            <input type="number" class="form-control" id="age" name="age" min="1" max="120" required>
                        </div>

                        <!-- جنسیت -->
                        <div class="mb-3">
                            <label class="form-label">جنسیت</label>
                            <div class="d-flex">
                                <div class="form-check me-3">
                                    <input class="form-check-input" type="radio" name="gender" id="male" value="male" checked>
                                    <label class="form-check-label" for="male">
                                        مرد
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                                    <label class="form-check-label" for="female">
                                        زن
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- علایق -->
                        <div class="mb-3">
                            <label class="form-label">علایق (چند گزینه را می‌توانید انتخاب کنید)</label>
                            <div class="form-check">
                                <input class="form-check-input" name="sports[]" type="checkbox" id="gadgets" value="gadgets">
                                <label class="form-check-label" for="gadgets">گجت</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="sports[]" type="checkbox" id="books" value="books">
                                <label class="form-check-label" for="books">کتاب</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="sports[]" type="checkbox" id="music" value="music">
                                <label class="form-check-label" for="music">موسیقی</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="sports[]" type="checkbox" id="sports" value="sports">
                                <label class="form-check-label" for="sports">ورزش</label>
                            </div>
                        </div>

                        <!-- بودجه -->
                        <div class="mb-3">
                            <label for="budget" class="form-label">بودجه (تومان)</label>
                            <input type="number" class="form-control" id="budget" name="budget" min="0" step="1000" required>
                        </div>

                        <!-- مناسبت -->
                        <div class="mb-3">
                            <label for="occasion" class="form-label">مناسبت</label>
                            <select class="form-select" id="occasion" name="occasion" required>
                                <option value="" selected disabled>انتخاب کنید</option>
                                <option value="birthday">تولد</option>
                                <option value="valentine">ولنتاین</option>
                                <option value="wedding">عروسی</option>
                                <option value="graduation">فارغ‌التحصیلی</option>
                            </select>
                        </div>

                        <!-- دکمه ارسال -->
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary btn-lg">پیشنهاد بده</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap 5 JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
