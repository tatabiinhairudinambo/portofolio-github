"use client";

import React from "react";
import { Terminal } from "lucide-react";

export default function AboutSection() {
  return (
    <section
      id="section-about"
      className="panel w-full min-h-screen md:w-screen md:h-screen flex-shrink-0 relative overflow-hidden flex flex-col md:flex-row items-center justify-between bg-[#0A0A0A] text-[#FFFFFF] px-6 sm:px-12 md:px-24 py-20 md:py-0"
    >
      <div className="absolute top-0 right-0 w-[40vw] h-[40vw] bg-[#E6DFD3]/5 rounded-full blur-[140px] pointer-events-none" />
      <div className="absolute -bottom-20 -left-20 w-[30vw] h-[30vw] bg-[#FFFFFF]/5 rounded-full blur-[100px] pointer-events-none" />

      <div className="w-full md:w-5/12 flex flex-col justify-center items-start md:items-center relative z-10 mb-12 md:mb-0">
        <div className="relative border-l-2 border-[#E6DFD3] pl-6 md:pl-10 py-2">
          <span className="font-mono text-xs md:text-sm tracking-[0.35em] text-[#E6DFD3]/60 uppercase block mb-3 font-bold stagger-item">
            {'// 02. Profil & Biodata'}
          </span>
          <h2 className="section-title main-title text-6xl sm:text-7xl md:text-8xl lg:text-9xl font-black text-[#E6DFD3] tracking-tighter leading-[0.88] uppercase">
            ABRAM<br />DOLI S<span className="text-[#FFFFFF]">.</span>
          </h2>
          <div className="mt-4 stagger-item">
            <span className="inline-block text-2xl md:text-3xl font-bold text-[#FFFFFF] tracking-tight">
              Full-Stack Programmer
            </span>
          </div>
          <div className="mt-3 flex items-center gap-3 stagger-item">
            <span className="inline-block w-3 h-3 rounded-full bg-[#E6DFD3]" />
            <span className="font-mono text-xs tracking-[0.2em] uppercase text-[#FFFFFF]/70">
              Indonesia
            </span>
          </div>
        </div>
      </div>

      <div className="w-full md:w-7/12 flex flex-col justify-center relative z-10 md:pl-12 lg:pl-20 max-w-3xl">
        <div className="p-8 md:p-12 bg-[#141414]/60 border border-[#E6DFD3]/15 rounded-3xl backdrop-blur-xl relative group hover:border-[#E6DFD3]/30 transition-all duration-500 shadow-[0_20px_50px_rgba(0,0,0,0.5)]">
          <div className="absolute top-6 right-6 text-[#E6DFD3]/20 group-hover:text-[#E6DFD3]/50 transition-colors">
            <Terminal className="w-8 h-8" />
          </div>

          <div className="space-y-6 md:space-y-8">
            <p className="text-lg md:text-2xl font-medium text-[#FFFFFF] leading-relaxed tracking-wide stagger-item">
              Saya adalah seorang Full-Stack Programmer yang berdedikasi dalam merancang dan membangun solusi aplikasi berbasis web berkinerja tinggi. Terampil dalam mengintegrasikan arsitektur modern dengan fokus pada penulisan kode yang bersih, efisiensi sistem, serta pengalaman pengguna yang interaktif.
            </p>

            <p className="text-base md:text-xl font-light text-[#E6DFD3]/85 leading-relaxed tracking-wide stagger-item">
              Berbekal pengalaman dalam pengembangan perangkat lunak, saya menggabungkan ketajaman pemahaman infrastruktur teknologi dengan keahlian pengembangan aplikasi modern menggunakan berbagai framework dan bahasa pemrograman terkini.
            </p>
          </div>

          <div className="mt-10 pt-8 border-t border-[#E6DFD3]/15 grid grid-cols-3 gap-4">
            <div className="flex flex-col stagger-item">
              <span className="text-3xl md:text-5xl font-black text-[#FFFFFF] tracking-tight">
                3<span className="text-[#E6DFD3]">+</span>
              </span>
              <span className="text-[11px] md:text-xs text-[#E6DFD3]/60 uppercase tracking-widest font-mono mt-1">
                Tahun Pengalaman
              </span>
            </div>

            <div className="flex flex-col border-l border-[#E6DFD3]/15 pl-4 stagger-item">
              <span className="text-3xl md:text-5xl font-black text-[#FFFFFF] tracking-tight">
                10<span className="text-[#E6DFD3]">+</span>
              </span>
              <span className="text-[11px] md:text-xs text-[#E6DFD3]/60 uppercase tracking-widest font-mono mt-1">
                Proyek Selesai
              </span>
            </div>

            <div className="flex flex-col border-l border-[#E6DFD3]/15 pl-4 stagger-item">
              <span className="text-3xl md:text-5xl font-black text-[#FFFFFF] tracking-tight">
                5<span className="text-[#E6DFD3]">+</span>
              </span>
              <span className="text-[11px] md:text-xs text-[#E6DFD3]/60 uppercase tracking-widest font-mono mt-1">
                Teknologi Utama
              </span>
            </div>
          </div>
        </div>

        <div className="mt-6 flex justify-end stagger-item">
          <div className="w-48 h-48 md:w-56 md:h-56 rounded-2xl overflow-hidden border border-[#E6DFD3]/20 shadow-[0_15px_35px_rgba(0,0,0,0.6)]">
            <img
              src="/profile.svg"
              alt="Abram Doli S."
              className="w-full h-full object-cover"
            />
          </div>
        </div>
      </div>
    </section>
  );
}
