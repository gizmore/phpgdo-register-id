<?php
function id_date_to_str(string $date): string
{
    return substr($date, 0, 4) .
        substr($date, 5, 2).
        substr($date, 8, 2);
}

function id_check(string $country, string $id, string $birthdate, string $plz): bool
{
    require __DIR__ . "id/{$country}/id_{$country}.php";
    $method = "check_id_{$country}";
    call_user_func($method, $id, $birthdate, $plz);
}
