<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
<!-- TW Elements is free under AGPL, with commercial license required for specific uses. See more details: https://tw-elements.com/license/ and contact us for queries at tailwind@mdbootstrap.com --> 
<div class="flex flex-col">
    <div class="overflow-x-hidden">
      <div class="inline-block ">
        <div class="overflow-hidden">
          <table class="min-w-full text-left text-sm font-light">
            <thead class="border-b font-medium dark:border-neutral-500">
              <tr>
                <th scope="col" class="px-6 py-4">No</th>
                <th scope="col" class="px-6 py-4">Judul</th>
                <th scope="col" class="px-6 py-4">Pengarang</th>
                <th scope="col" class="px-6 py-4">Tahun</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($books as $book)
            <tr class="border-b dark:border-neutral-500">
                <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $book->id }}</td>
                <td class="whitespace-nowrap px-6 py-4">{{ $book->title }}</td>
                <td class="whitespace-nowrap px-6 py-4">{{ $book->author }}</td>
                <td class="whitespace-nowrap px-6 py-4">{{ $book->year }}</td>
                <td class="whitespace-nowrap px-6 py-4"><a href="{{ route('bukus.edit', $book->id) }}">Edit</a></td>
                <td class="whitespace-nowrap px-6 py-4">
                  <form action="{{ route('bukus.destroy', $book->id) }}" method="post" onsubmit="return confirm('Are you sure you want to delete this book?')">
                    @csrf
                    @method('delete')
                    <button type="submit">Hapus</button>
                  </form>
                </td>
              </tr>
            @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <div class="title-tambah">
    <h1 class="text-[5vw] mt-[7vw]">Tambah Buku</h1>

    <div class="input-buku">
        <form action="{{ route('bukus.store') }}" method="post">
            @csrf
            <div class="inputan flex flex-col gap-[4vw]">
                <div class="flex flex-col">
                    <label for="title">Judul</label>
                    <input type="text" class="border border-solid border" name="title">
                </div>
                <div class="flex flex-col">
                    <label for="author">Pengarang</label>
                    <input type="text" class="border border-solid border" name="author">
                </div>
                <div class="flex flex-col">
                    <label for="year">Tahun</label>
                    <input type="number" class="border border-solid border" name="year">
                </div>
            </div>
            <input type="submit" class="p-[2vw] bg-black text-white cursor-pointer mt-[2vw] rounded-[1vw]" value="Submit">
    </div>
  </div>
</body>
</html>