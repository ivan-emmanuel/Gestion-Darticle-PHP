<?php
delete_category($_GET['id']);
set_session_flash("Article Supprimé avec succès");
redirect_to(url_for("dashboard.categories.index"));