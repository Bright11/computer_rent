<div id="sidebar" class="span3">

    <ul id="sideManu" class="nav nav-tabs nav-stacked">
        <li class="subMenu open"><a> Computers</a>
            <ul>
            @forelse ($cart as $c)
            <li><a class="active" href="/getcategory/{{ $c->id }}"><i class="icon-chevron-right"></i>{{ $c->name }} </a></li>
            @empty

            @endforelse

            </ul>
        </li>

    </ul>
    <br/>
    @forelse ($sidberpro as $sdb)
    <div class="thumbnail">
        <img src="{{ asset('product/'.$sdb->image) }}" alt="Bootshop panasonoc New camera"/>
        <div class="caption">
          <h5>{{ $sdb->product_name }}</h5>
            <h4 style="text-align:center"><a class="btn" href="/details/{{ $sdb->id }}"> <i class="icon-zoom-in"></i></a> <a class="btn" href="/details/{{ $sdb->id }}">Review <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="/details/{{ $sdb->id }}">{{ $sdb->price }}</a></h4>
        </div>
      </div><br/>

    @empty

    @endforelse



</div>
