<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Add New Record</h2>
    <form class="post-form" action="savedata.php" method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="username" required/>
        </div>

        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="phone" required/>
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" required/>
        </div>

        <div class="form-group">
            <label>Name</label>
            <input type="text" name="msg" required/>
        </div>

        <input class="submit" type="submit" value="Save"  />
    </form>
</div>
</div>
</body>
</html>
