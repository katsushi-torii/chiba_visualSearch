import numpy as np
import matplotlib.pyplot as plt
from colormath.color_objects import LabColor, sRGBColor
from colormath.color_conversions import convert_color

def generate_cielab_colors(num_colors, L_star, C_star):
    colors = []
    for i in range(num_colors):
        hue = i * 360 / num_colors
        print(hue)
        lab = convert_color(sRGBColor(1, 1, 1), LabColor)  # 白を基準に
        lab.lab_l = L_star
        lab.lab_a = C_star * np.cos(np.deg2rad(hue))
        lab.lab_b = C_star * np.sin(np.deg2rad(hue))
        colors.append(lab)
    return colors

# 例: 12色、輝度L*=50、C*=50
colors = generate_cielab_colors(24, 50, 50)

# 各色のRGB値を出力（0から255の整数値）
for i, color in enumerate(colors):
    rgb_color = convert_color(color, sRGBColor)
    r = int(rgb_color.rgb_r * 255)
    g = int(rgb_color.rgb_g * 255)
    b = int(rgb_color.rgb_b * 255)
    print(f"色{i+1}: RGB = ({r}, {g}, {b})")

# # 可視化 (matplotlibはRGBで表示するため、RGBに変換する必要があります)
rgb_colors = [convert_color(color, sRGBColor).rgb_r for color in colors]
plt.imshow([rgb_colors])
plt.show()