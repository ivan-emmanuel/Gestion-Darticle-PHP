<?php
delete_post($_GET['id']);
set_session_flash("Article Supprimé avec success");
redirect_to(url_for("dashboard.articles.index"));