<main>
        <div class="container marketing mb-4 mt-5">
            <form method="post" action="process_contact.php">
                <div class="mb-2">
                    <label class="form-label">Họ Tên: </label>
                    <input type="text" class="form-control" aria-describedby="emailHelp" name ="name">
                </div>
                <div class="mb-2">
                    <label class="form-label">Email: </label>
                    <input type="text" class="form-control" name = "email">
                </div>
                <div class="mb-2">
                    <label class="form-label">Số Điện Thoại: </label>
                    <input type="text" class="form-control" name = "phone">
                </div>
                <div class="mb-2">
                    <label class="form-label">Ghi Chú: </label>
                    <textarea class="form-control" name="content" id="" cols="30" rows="5"></textarea>
                </div>
                <div class="d-flex justify-content-center mt-5">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </main>