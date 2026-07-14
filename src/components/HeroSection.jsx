"use client";

import React from "react";
import { ArrowUpRight, Sparkles } from "lucide-react";

export default function HeroSection({ onExplore }) {
  return (
    <section
      id="section-hero"
      className="panel w-full min-h-screen md:w-screen md:h-screen flex-shrink-0 relative overflow-hidden flex flex-col justify-center items-center bg-[#0A0A0A] text-[#FFFFFF] select-none py-24 md:py-0"
    >
      <div className="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[70vw] h-[70vw] max-w-[800px] max-h-[800px] bg-gradient-to-tr from-[#E6DFD3]/10 via-[#FFFFFF]/5 to-transparent rounded-full blur-[120px] pointer-events-none opacity-60 animate-pulse" />
      <div className="absolute top-1/4 left-1/4 w-[300px] h-[300px] bg-[#E6DFD3]/5 rounded-full blur-[90px] pointer-events-none" />

      <div className="absolute top-14 md:top-16 left-6 md:left-16 z-40 flex items-center gap-3 stagger-item">
        <div className="flex items-center justify-center w-2 h-2 rounded-full bg-[#E6DFD3] animate-ping" />
        <span className="font-mono text-xs md:text-sm tracking-[0.3em] uppercase text-[#E6DFD3] font-black flex items-center gap-2">
          <Sparkles className="w-3.5 h-3.5 text-[#E6DFD3]" />
          Portfolio // 2026 Edition
        </span>
      </div>

      <div
        onClick={onExplore}
        className="absolute top-14 md:top-16 right-6 md:right-16 z-40 group cursor-pointer flex items-center gap-3 bg-[#141414] border border-[#E6DFD3]/30 px-4 py-2 rounded-full hover:border-[#E6DFD3] transition-all duration-300"
      >
        <span className="font-mono text-xs tracking-[0.2em] uppercase text-[#E6DFD3] hidden sm:inline">
          Jelajahi Portofolio
        </span>
        <div className="w-8 h-8 rounded-full bg-[#E6DFD3] text-[#0A0A0A] flex items-center justify-center group-hover:scale-110 transition-transform">
          <ArrowUpRight className="w-4 h-4 group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-transform font-bold" />
        </div>
      </div>

      <div className="relative flex flex-col items-center justify-center w-full max-w-7xl mx-auto px-4 mt-6 md:mt-0">
        <div className="z-10 text-center relative pointer-events-none w-full">
          <h1 className="main-title section-title text-7xl sm:text-8xl md:text-[10rem] lg:text-[13rem] font-black tracking-tighter text-[#FFFFFF] leading-none select-none drop-shadow-[0_10px_30px_rgba(255,255,255,0.05)]">
            PORT
          </h1>
        </div>

        <div className="z-20 relative -mt-10 sm:-mt-16 md:-mt-28 -mb-10 sm:-mb-16 md:-mb-28 w-64 sm:w-80 md:w-[380px] lg:w-[420px] h-72 sm:h-96 md:h-[480px] lg:h-[520px] pointer-events-none flex items-center justify-center filter drop-shadow-[0_30px_60px_rgba(0,0,0,0.95)]">
          {/* Portrait oval container */}
          <div className="relative w-full h-full rounded-t-[200px] rounded-b-3xl overflow-hidden border border-[#E6DFD3]/15 shadow-[inset_0_0_40px_rgba(0,0,0,0.6)]">
            <img
              src="/tata-hero.jpg"
              alt="Tatabiin Hairudin Ambo"
              className="w-full h-full object-cover object-[center_35%] pointer-events-none select-none scale-110"
            />
            {/* Gradient overlay: fade bottom into dark bg */}
            <div className="absolute inset-0 bg-gradient-to-t from-[#0A0A0A] via-[#0A0A0A]/30 to-transparent pointer-events-none" />
            {/* Side vignette */}
            <div className="absolute inset-0 shadow-[inset_0_0_50px_rgba(10,10,10,0.5)] pointer-events-none" />
          </div>
        </div>

        <div className="z-30 text-center relative pointer-events-none w-full -mt-6 sm:-mt-10 md:-mt-16">
          <h1 className="main-title parallax-title text-7xl sm:text-8xl md:text-[10rem] lg:text-[13rem] font-black tracking-tighter text-transparent stroke-text leading-none select-none drop-shadow-[0_20px_40px_rgba(0,0,0,0.9)]">
            FOLIO
          </h1>
        </div>
      </div>

      <div className="absolute bottom-8 md:bottom-12 left-6 md:left-16 right-6 md:right-16 z-40 flex flex-col sm:flex-row items-center justify-between gap-4 border-t border-[#E6DFD3]/15 pt-6 text-center sm:text-left">
        <div className="flex items-center gap-3 stagger-item">
          <span className="font-mono text-xs tracking-[0.25em] text-[#E6DFD3]/60 uppercase font-bold">
            {'// Full-Stack Programmer'}
          </span>
        </div>
        <div className="flex items-center gap-2 font-mono text-xs tracking-widest text-[#E6DFD3] uppercase stagger-item">
          <span>Scroll untuk Menjelajahi</span>
          <ArrowUpRight className="w-3.5 h-3.5 rotate-45" />
        </div>
      </div>
    </section>
  );
}
