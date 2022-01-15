<ul class="collection z-depth-3">
    @for ($i = 1; $i < 100; $i++)
    <li class="collection-item avatar z-depth-3">
        <i class="material-icons circle red">play_arrow</i>
        <span class="title">Item {{ $i }}</span>
        <p>First Line <br>
           Second Line
        </p>
        <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
      </li>
    @endfor
  </ul>