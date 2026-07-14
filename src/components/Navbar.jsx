"use client";

import React, { useState, useEffect } from "react";
import { ArrowUpRight } from "lucide-react";

export default function Navbar({ onNavigate }) {
  const [scrolled, setScrolled] = useState(false);
  const [activeSection, setActiveSection] = useState(0);

  useEffect(() => {
    const handleScroll = () => {
      setScrolled(window.scrollY > 30);
    };
    window.addEventListener("scroll", handleScroll);
    return () => window.removeEventListener("scroll", handleScroll);
  }, []);

  const navItems = [
    { label: "HERO", idx: 0 },
    { label: "TENTANG", idx: 1 },
    { label: "KEAHLIAN", idx: 2 },
    { label: "PROYEK", idx: 3 },
    { label: "KONTAK", idx: 4 },
  ];

  const handleNavClick = (index) => {
    setActiveSection(index);
    if (onNavigate) onNavigate(index);
  };

  return (
    <header
      className={`fixed top-0 left-0 right-0 z-50 transition-all duration-500 ${
        scrolled
          ? "bg-[#0A0A0A]/90 backdrop-blur-md border-b border-[#E6DFD3]/15 py-2"
          : "bg-transparent py-3"
      }`}
    >
      <div className="max-w-7xl mx-auto px-5 md:px-12 flex items-center justify-between gap-4">

        {/* Left: Identity */}
        <button
          onClick={() => handleNavClick(0)}
          className="group flex items-center gap-2 text-left focus:outline-none shrink-0"
        >
          <div className="w-7 h-7 rounded-full bg-[#141414] border border-[#E6DFD3]/30 flex items-center justify-center text-[#E6DFD3] font-black text-[10px] tracking-tight group-hover:bg-[#E6DFD3] group-hover:text-[#0A0A0A] transition-all duration-300">
            TA
          </div>
          <div className="flex flex-col leading-none">
            <span className="font-extrabold text-[#FFFFFF] text-[11px] md:text-xs tracking-widest uppercase leading-none">
              TATABIIN H. AMBO
            </span>
            <span className="font-mono text-[9px] text-[#E6DFD3]/50 tracking-[0.18em] uppercase mt-0.5">
              Full Stack Developer
            </span>
          </div>
        </button>

        {/* Center: Nav Pill */}
        <nav className="hidden lg:flex items-center gap-1 bg-[#141414]/90 border border-[#E6DFD3]/20 px-2.5 py-1 rounded-full backdrop-blur-lg">
          {navItems.map((item) => (
            <button
              key={item.idx}
              onClick={() => handleNavClick(item.idx)}
              className={`font-mono text-[10px] tracking-[0.15em] uppercase transition-all duration-300 px-3 py-1 rounded-full focus:outline-none ${
                activeSection === item.idx
                  ? "text-[#0A0A0A] bg-[#E6DFD3] font-bold"
                  : "text-[#E6DFD3]/60 hover:text-[#E6DFD3] hover:bg-[#E6DFD3]/10"
              }`}
            >
              {item.label}
            </button>
          ))}
        </nav>

        {/* Right: Status badge + CTA */}
        <div className="flex items-center gap-2 shrink-0">
          {/* Available status */}
          <div className="hidden sm:flex items-center gap-1.5 bg-[#141414] border border-[#E6DFD3]/20 px-2.5 py-1 rounded-full">
            <span className="relative flex h-1.5 w-1.5">
              <span className="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
              <span className="relative inline-flex rounded-full h-1.5 w-1.5 bg-emerald-500"></span>
            </span>
            <span className="font-mono text-[9px] tracking-wider uppercase text-[#E6DFD3]/80 font-semibold">
              Available
            </span>
          </div>

          {/* Mari Bicara CTA */}
          <button
            onClick={() => handleNavClick(4)}
            className="group flex items-center gap-1.5 bg-[#FFFFFF] text-[#0A0A0A] px-3.5 py-1.5 rounded-full font-black text-[10px] tracking-wider uppercase hover:bg-[#E6DFD3] transition-all duration-300 shadow-[0_0_12px_rgba(255,255,255,0.12)]"
          >
            <span>Mari Bicara</span>
            <ArrowUpRight className="w-3 h-3 group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-transform" />
          </button>
        </div>

      </div>
    </header>
  );
}
