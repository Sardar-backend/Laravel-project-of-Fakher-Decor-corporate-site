@foreach ($categories as $category )

@if (is_null($category->child()->first()))
<li><a>{{$category->name}}</a></li>
@else
    <li>
        <details open>
            <summary>{{$category->name}}</summary>
            <ul>
                @if (is_null($category->child()->first()->child()))
                <li><a>زیر م</a></li>


                @else
                <li>
                <details open>

                    <summary>{{$category->child()->first()->name}}</summary>

                    <!-- <ul>
                        <li><a>زیر منوی 1 دسته بندی سوم</a></li>
                        <li><a>زیر منوی 2 دسته بندی سوم</a></li>
                    </ul> -->
                </details>
            </li>
            @endif


    </ul>
    </details>
</li>
@endif
@endforeach
