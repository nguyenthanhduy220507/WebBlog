<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
      <li class="page-item<?php if ($page == 1) echo ' disabled'; ?>">
        <?php if ($page > 1) { ?>
          <a class="page-link" href="?page=<?php echo $page - 1 ?>&search=<?php echo $search ?>">Previous</a>
        <?php } else { ?>
          <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
        <?php } ?>
      </li>
      <?php for ($i = 1; $i <= $page_value; $i++) { ?>
        <li class="page-item<?php if ($i == $page) echo ' active'; ?>">
          <a class="page-link" href="?page=<?php echo $i ?>&search=<?php echo $search ?>"><?php echo $i ?></a>
        </li>
      <?php } ?>
      <li class="page-item<?php if ($page == $page_value) echo ' disabled'; ?>">
        <?php if ($page < $page_value) { ?>
          <a class="page-link" href="?page=<?php echo $page + 1 ?>&search=<?php echo $search ?>">Next</a>
        <?php } else { ?>
          <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Next</a>
        <?php } ?>
      </li>
    </ul>
  </nav>