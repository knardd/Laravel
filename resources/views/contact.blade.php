<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <h1 class="text-white">Contact Page</h1>
    <form action="" method="POST" class="text-white">
        Nama: <input type="text" name="nama"><br>
        Email: <input type="email" name="email"><br>
        Keterangan: <input type="text" name="keterangan"><br>
        <button type="submit" name="masuk">Masuk</button><br>
    </form>
</x-layout>