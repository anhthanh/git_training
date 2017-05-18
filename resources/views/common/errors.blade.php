<?php
/**
 * Created by PhpStorm.
 * User: ky
 * Date: 18/05/2017
 * Time: 13:49
 */
?>
@if (count($errors) > 0)
    <!-- Form Error List -->
    <div class="alert alert-danger">
        <strong>Whoops! Something went wrong!</strong>

        <br><br>

        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
