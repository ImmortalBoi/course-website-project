<x-admin-layout>

    <div class="flex justify-center border-1 ">
        <form action="{{Route('courseControl.store')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="computer-name" class="form-label">Course Name</label>
                <input id="computer-name" name="computer-name" value="" type="text" class="form-control" >

            </div>

            <div class="mb-3">
                <label for="computer-origin" class="form-label">Computer Origin</label>
                <input id="computer-origin" name="computer-origin" value="" type="text" class="form-control">
                
            </div>

            <div class="mb-3">
                <label for="computer-price" class="form-label">Computer Price</label>
                <input id="computer-price" name="computer-price" value="" type="text" class="form-control ">

            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</x-admin-layout>
