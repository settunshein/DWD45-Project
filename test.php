<?php

echo password_hash('password', PASSWORD_BCRYPT);
echo '<br>';

if (password_verify('password', '$2y$10$XJd3mk3IZI1drzLv7UFmY.1GMzT4Lsx0Vm6MVjGOL6FMpgiz6kqc6')) {
    echo 'Correct';
} else {
    echo 'Incorrect';
}
