import React from "react";
import "../../../css/style.css";
import headerImage from "../../../gambar/header.jpg";
import { Link, usePage } from "@inertiajs/inertia-react";
import { Inertia } from "@inertiajs/inertia";

export default function Layout({children}){
    const {user} = usePage().props.auth
    return (
        <>

        { /*-------HEADER--------*/ }
        <div className="header">
            <img src={headerImage} alt="" />
        </div>

        { /*-------MENU--------*/ }
        <div className="menu">
            <b>
                <a href="/Home">HOME</a>
                {/* {user.role == 'admin' ?( */ }
                    <>
                    <a href="/guru/index">Guru</a>
                    <a href="/jurusan/index">Jurusan</a>
                    <a href="/kelas/index">Kelas</a>
                    <a href="/siswa/index">Siswa</a>
                    <a href="/mapel/index">Mata Pelajaran</a>
                    <a href="/mengajar/index">Mengajar</a>
                    </>
                 { /* ) : ( */ }
                    <a href="/nilai/index">Nilai</a>
                {/* )} */ }
                <a href="/logout">Logout</a>
            </b>
        </div>

        { /*--------CONTENT--------*/ }
        <div className="content">{children}</div>

        { /*-------FOOTER--------*/ }
        <div className="footer">
            <b>
                <p className="mar">2023 - UJIKOM & LSP</p>
            </b>
        </div>
        </>
    );
};